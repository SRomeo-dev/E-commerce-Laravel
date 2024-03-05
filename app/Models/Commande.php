<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;


    protected $fillable = [
        'amount',
        // 'payment_created_at',
        'products',
        'user_name', // Ajoutez le nom de l'utilisateur
        'user_lastname', // Ajoutez le prénom de l'utilisateur
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
