<?php

namespace App\Model\User\Entity\User;

interface UserRepository
{
    public function hasByNetworkIdentity(string $network, string $identity): bool;

    public function findByConfirmToken(string $token): ?User;

    public function getByEmail(Email $email): User;

    public function findByResetToken(string $token): ?User;

    public function hasByEmail(Email $email): bool;

    public function add(User $user): void;
}