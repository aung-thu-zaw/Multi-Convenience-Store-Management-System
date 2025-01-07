<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    // public function transactions(): HasMany
    // {
    //     return $this->hasMany(Transaction::class, 'cashier_id');
    // }

    // public function shifts(): HasMany
    // {
    //     return $this->hasMany(EmployeeShift::class);
    // }

    // public function payrolls(): HasMany
    // {
    //     return $this->hasMany(Payroll::class);
    // }

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@store.com');
    }
}
