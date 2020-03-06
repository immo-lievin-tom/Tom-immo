<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{

    protected $math;
    protected $guzzle;

    public function setUp():void
    {
        $this->math = new Math(3,4);
        $this->guzzle = new \GuzzleHttp\Client();
    }

    public function testApi()
    {
        $response = $this->guzzle->request('GET', 'http://localhost/tom-immo/public/api/index/properties', ['auth' => ['user', 'password']]);
        $code = $response->getStatusCode(); // 200
        $this->assertSame(200, $code);
    }

    public function testHtml()
    {
        $response = $this->guzzle->request('GET', 'http://localhost/testphpunit/testhtml/');
        $code = $response->getBody();
        $this->assertStringContainsString("<h1>", $code);
    }

    public function testFailure()
    {
        $this->assertArrayHasKey('foo', ['bar' => 'baz', 'foo' => 'bar']);
    }

    /**
     * @dataProvider additionProvider
     */

    public function testAdd($a, $b, $expected)
    {
        $newmath = new Math($a, $b);
        $this->assertSame($expected, $newmath->add());
    }

    public function testAdd1()
    {
        // $this->assertSame(3, $newmath->add(), 'Erreur fatale le chiffre n\'est pas égale');
        $this->assertSame(7, $this->math->add());
    }

    /**
     * @dataProvider multiplyProvider
     */

    public function testMultiply($a, $b, $expected)
    {
        $newmath = new Math($a, $b);
        $this->assertSame($expected, $newmath->multiply());
    }

    public function additionProvider()
    {
        return [
            [3, 4, 7],
            [6, 1, 7],
            [5, 5, 10],
            [5, 3, 8],
            [16, 3, 19]
        ];
    }

    public function multiplyProvider()
    {
        return [
            [3, 4, 12],
            [6, 1, 6],
            [5, 5, 25],
            [5, 3, 15]
        ];
    }
}
