<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function index()
    {
        return view('admin.appointments.index', [
            'appointments' => [
                [
                    'id' => 1,
                    'date' => '2025-04-25',
                    'description' => 'O sujeito foi atendido pela assistente social Júlia, onde retratou os eventos ocorridos na semana. Foram dados os encaminhamentos necessários'
                ],
                [
                    'id' => 2,
                    'date' => '2025-04-20',
                    'description' => 'O sujeito não compareceu no local'
                ],
                [
                    'id' => 3,
                    'date' => '2025-04-15',
                    'description' => 'O sujeito foi atendido pelo assistente social Marcos, onde retratou os eventos ocorridos na semana. Nenhum encaminhamento foi fornecido'
                ]
            ]
        ]);
    }

    public function create()
    {
        return view('admin.appointments.create');
    }

    public function detail(string $id)
    {
        return view('admin.appointments.detail', [
            'appointment' => [
                'id' => 1,
                'date' => '2025-04-25',
                'description' => 'O sujeito foi atendido pela assistente social Júlia, onde retratou os eventos ocorridos na semana. Foram dados os encaminhamentos necessários'
            ]
        ]);
    }

    public function edit(string $id)
    {
        return view('admin.appointments.edit', [
            'appointment' => [
                'id' => 1,
                'date' => '2025-04-25',
                'description' => 'O sujeito foi atendido pela assistente social Júlia, onde retratou os eventos ocorridos na semana. Foram dados os encaminhamentos necessários'
            ]
        ]);
    }

    public function update(Request $request)
    {
        if (strlen($request->get("description")) == 0) {
            return redirect()->back()->with('error', 'A descrição é obrigatória');
        } else {
            return redirect()->route('admin.appointments.index')->with('success', 'Alteração realizada com sucesso!');
        }
    }
}
