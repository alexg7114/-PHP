<?php

interface INotifier
{
    public function notifier(string $content): void;
}

class Notify implements INotifier
{
    private $text;
    public function __construct(string $text)
    {
        $this->text = $text;
    }
    public function sendMessage():string
    {
        return message($this->text);
    }
}

abstract class Decorator implements INotifier
{
    protected $content = null;
    public function __construct(INotifier $content)
    {
        $this->content = $content;
    }
}
class Sms extends Decorator
{
    public function sendMessage(): string
    {
        return message($this->content->sendMessage);
    }
}
class Email extends Decorator
{
    public function sendMessage(): string
    {
        return message($this->content->sendMessage);
    }
}
class CN extends Decorator
{
    public function sendMessage(): string
    {
        return message($this->content->sendMessage);
    }
}
