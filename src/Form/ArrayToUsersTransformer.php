<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\DataTransformerInterface;

class ArrayToUsersTransformer implements DataTransformerInterface
{
public function transform($value)
{
// Transformation des données du tableau en instance de Users
if ($value instanceof Users) {
return $value;
}

return new Users($value['created_at']);
}

public function reverseTransform($value)
{
// Transformation inverse non nécessaire pour ce cas
throw new \LogicException('Reverse transformation is not supported');
}
}
