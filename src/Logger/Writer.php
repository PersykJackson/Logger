<?php


namespace Liloy\Logger;


use Liloy\Exceptions\FileNotFoundException;

class Writer
{
    private string $file;
    public function __construct($file)
    {
        $this->file = $file;
    }
    private function check(): bool
    {
        if (file_exists($this->file)) {
            return true;
        }
        return false;
    }
    public function write($level, $message, $context): void
    {
        $now = date('Y-m-d H:i:s');
        $file = "[".$now.'] ['.strtoupper($level).'] - '.$message.' - ['.implode($context)."]\n";
        file_put_contents($this->file, $file, FILE_APPEND);
    }
}