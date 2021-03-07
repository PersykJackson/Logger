<?php


namespace Liloy\Logger;

use Liloy\Exceptions\FileNotFoundException;

class Writer
{
    private string $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
        $this->checkFileExists();
    }

    private function checkFileExists(): bool
    {
        if (file_exists($this->filePath)) {
            return true;
        }
        throw new FileNotFoundException();
    }

    public function write($level, $message, $context): void
    {
        $now = date('Y-m-d H:i:s');
        $file = '['.$now.'] ['.strtoupper($level).'] - '.$message.' - ['.implode($context)."]\n";
        file_put_contents($this->filePath, $file, FILE_APPEND);
    }
}
