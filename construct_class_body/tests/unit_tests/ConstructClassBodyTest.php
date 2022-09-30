<?php

declare(strict_types=1);

require_once(__DIR__ . "./../../vendor/autoload.php");
require_once(__DIR__ . "./../mocks/validResults.php");

use PHPUnit\Framework\TestCase;
use Src\Utils\ConstructClassBody;

define('CONSTRUCTOR_PARAM_BASE', array(
    'codSitAluno',
    'codTpSituacao',
    'ativo',
    'dtMatricula',
    'codOrigem',
    'mediaGlobal',
    'qtdParcelas',
    'mediaGlobalSerie',
    'dtInscricao',
));

final class ConstructClassBodyTest extends TestCase
{
    private $instance;

    protected function setUp(): void
    {
        $this->instance = new ConstructClassBody(CONSTRUCTOR_PARAM_BASE);
    }

    public function testGenerateAttributes()
    {
        global $validGenerateAttributes;
        $result = $this->instance->generateAttributes();
        $expected = $validGenerateAttributes;
        $this->assertEquals($expected, $result);
    }

    public function testGenerateGetters()
    {
        global $validGenerateGetters;
        $result = $this->instance->generateGetters();
        $expected = $validGenerateGetters;
        $this->assertEquals($expected, $result);
    }

    public function testGenerateSetters()
    {
        global $validGenerateSetters;
        $result = $this->instance->generateSetters();
        $expected = $validGenerateSetters;
        $this->assertEquals($expected, $result);
    }
}
