<?php declare(strict_types=1);

namespace GrumPHP\Exception;

class FileNotFoundException extends RuntimeException
{
    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        parent::__construct(sprintf('File "%s" doesn\'t exists.', $path));
    }
}
