<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{    
    public function index()
    {
        $companies = Company::paginate(10);
        return view('companies.index', compact('companies'));
    }    
    public function create()
    {
        return view('companies.create');
    }    
    public function store(CompanyRequest $request)
    {        
        Company::create($request->validated());
        return redirect()->route('companies.index')->with('success', '¡Empresa creada con éxito!');
    }    
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }    
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }
    public function update(Request $request, Company $company)
    {
        if ($request->hasFile('logo')) {            
            if ($company->logo) {
                Storage::delete('public/' . $company->logo);
            }
            $company->logo = $request->file('logo')->store('logos', 'public');
        }
        
        $company->update($request->only(['name', 'email', 'website']));

        return redirect()->route('companies.index')->with('success', '¡Empresa actualizada con éxito!');
    }
    public function askDelete(Company $company)
    {
        return view('companies.ask-delete', compact('company'));
    }
    public function destroy(Company $company)
    {        
        if ($company->logo) {
            Storage::delete('public/' . $company->logo);
        }
        
        $company->delete();

        return redirect()->route('companies.index')->with('success', '¡Empresa eliminada con éxito!');
    }
}
