<?php

interface OutputInterface
{
    public function out(string $string);
}

class EchoOutput implements OutputInterface
{
    public function out(string $string)
    {
        echo $string;
    }
}

class FileOutput implements OutputInterface
{
    public function __construct(
        private string $fileName
    )
    {}

    public function out(string $string)
    {
        echo 'String ' . $string . ' was put to file ' . $this->fileName;
    }
}

class MailOutput implements OutputInterface
{
    public function __construct(
        private readonly string $mail
    )
    {
    }

    public function out(string $string)
    {
        echo 'Mail ' . $string . ' was sent to: ' . $this->mail . PHP_EOL;
    }
}


parse_str($argv[1], $out);
$outputType = $out['out'];

$outStrategy = match ($outputType) {
    'file' => (new FileOutput('./file.txt')),
    'echo' => (new EchoOutput()),
    'mail' => (new MailOutput('loz@gmail.com')),
};

out($outStrategy, 'some string');

function out(OutputInterface $outStrategy, string $message): void
{
    $outStrategy->out($message);
}
