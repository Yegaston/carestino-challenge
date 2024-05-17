<?php
/**
 * Este código tiene algunos errores. Podrás encontrarlos y solucionarlos? Tip: Podes ejecutar este archivo y podes Googlear si lo crees necesario.
 * Una vez que encuentres los errores. Qué mejoras le harías a estas clases?
 */



class Designer
{
    protected $name = '';
    protected $portfolioUrl = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getPortfolioUrl(): string
    {
        return $this->portfolioUrl;
    }

    public function setPortfolioUrl(string $portfolioUrl)
    {
        $this->portfolioUrl = $portfolioUrl;
    }
}

class Programmer
{
    protected $name = '';
    protected $githubUrl = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getGithubUrl(): string
    {
        return $this->githubUrl;
    }

    public function setGithubUrl(string $githubUrl)
    {
        $this->githubUrl = $githubUrl;
    }
}

//... some more code...
$designer = new Designer();
$designer->setName('Jane Smith');
$designer->setPortfolioUrl('https://www.behance.net/jane_smthith_90');

//... some code...
$programmer = new Programmer();
$programmer->setName('John Doe');
$programmer->getGithubUrl('https://github.com/github');

var_export($programmer);
var_export($designer);

//... some more code...