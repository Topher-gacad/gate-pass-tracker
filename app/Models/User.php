<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\Hasname;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasFactory, Notifiable, SoftDeletes, HasUuids;  

    protected $fillable = [
        'name',
        'email',
        'password',
        'company',
        'department',
        'full_name',
        'job_role',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
   
    public function getFilamentName(): string
    {
    return $this->full_name;
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->email == 'admin@example.com';
    }
}