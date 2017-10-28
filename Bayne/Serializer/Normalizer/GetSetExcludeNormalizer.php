<?php

namespace Bayne\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class GetSetExcludeNormalizer extends GetSetMethodNormalizer
{
    public function normalize($object, $format = null, array $context = array())
    {
        $data = parent::normalize($object, $format, $context);
        return array_filter($data, function ($field) {
            return $field !== null;
        });
    }
}