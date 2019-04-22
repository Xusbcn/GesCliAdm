<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteNuevoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:100', 
            'CIF/NIF' => ['required', 'unique:clientes,documento'],
            'direccion' => 'required|max:100', 
            'provincia' => 'required|max:100', 
            'localidad' => 'required|max:100', 
            'cp' => 'required|max:5', 
            'telefono' => 'required|unique:clientes,telefono',
            'email' => 'required|unique:clientes,mail',
        ];
    }

     public function messages()
    {
    return [
        'nombre.required' => 'El campo Nombre no puede estar vacio',
        'CIF/NIF.required' => 'El campo DNI/NIF no puede estar vacio',
        'CIF/NIF.unique' => 'El NIF ya existe',
        'direccion.required' => 'El campo Direccion no puede estar vacio',
        'provincia.required' => 'El campo Provincia no puede estar vacio',
        'localidad.required' => 'El campo Localidad no puede estar vacio',
        'cp.required' => 'El campo CP no puede estar vacio',
        'telefono.required' => 'El campo Telefono no puede estar vacio',
        'email.required' => 'El campo Mail no puede estar vacio',
        'email.unique' => 'El mail ya existe',
        'telefono.unique' => 'Este telefono ya existe',
    ];
    }

    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }
 
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }
}
