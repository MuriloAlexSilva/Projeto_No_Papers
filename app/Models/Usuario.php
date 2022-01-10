<?php

namespace App\Models;


class Usuario extends RModel
{
    protected $table = "usuarios";
    protected $fillable = ['nomeCompleto','telefone','cpf','data_nascimento','login','password','email'];
    
}
