<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

class Country
{
    /** @var string */
    private $country;

    /**
     * @param string $country
     */
    private function __construct(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function country()
    {
        return $this->country;
    }

    /**
     * @codeCoverageIgnore
     * 
     * @return Country
     */
    public static function AD() : Country
    {
        return new Country('AD');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AE() : Country
    {
        return new Country('AE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AF() : Country
    {
        return new Country('AF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AG() : Country
    {
        return new Country('AG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AI() : Country
    {
        return new Country('AI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AL() : Country
    {
        return new Country('AL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AM() : Country
    {
        return new Country('AM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AO() : Country
    {
        return new Country('AO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AP() : Country
    {
        return new Country('AP');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AQ() : Country
    {
        return new Country('AQ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AR() : Country
    {
        return new Country('AR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AS() : Country
    {
        return new Country('AS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AT() : Country
    {
        return new Country('AT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AU() : Country
    {
        return new Country('AU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AW() : Country
    {
        return new Country('AW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AX() : Country
    {
        return new Country('AX');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function AZ() : Country
    {
        return new Country('AZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BA() : Country
    {
        return new Country('BA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BB() : Country
    {
        return new Country('BB');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BD() : Country
    {
        return new Country('BD');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BE() : Country
    {
        return new Country('BE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BF() : Country
    {
        return new Country('BF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BG() : Country
    {
        return new Country('BG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BH() : Country
    {
        return new Country('BH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BI() : Country
    {
        return new Country('BI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BJ() : Country
    {
        return new Country('BJ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BL() : Country
    {
        return new Country('BL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BM() : Country
    {
        return new Country('BM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BN() : Country
    {
        return new Country('BN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BO() : Country
    {
        return new Country('BO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BQ() : Country
    {
        return new Country('BQ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BR() : Country
    {
        return new Country('BR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BS() : Country
    {
        return new Country('BS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BT() : Country
    {
        return new Country('BT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BV() : Country
    {
        return new Country('BV');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BW() : Country
    {
        return new Country('BW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BY() : Country
    {
        return new Country('BY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function BZ() : Country
    {
        return new Country('BZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CA() : Country
    {
        return new Country('CA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CC() : Country
    {
        return new Country('CC');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CD() : Country
    {
        return new Country('CD');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CF() : Country
    {
        return new Country('CF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CG() : Country
    {
        return new Country('CG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CH() : Country
    {
        return new Country('CH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CI() : Country
    {
        return new Country('CI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CK() : Country
    {
        return new Country('CK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CL() : Country
    {
        return new Country('CL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CM() : Country
    {
        return new Country('CM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CN() : Country
    {
        return new Country('CN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CO() : Country
    {
        return new Country('CO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CR() : Country
    {
        return new Country('CR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CU() : Country
    {
        return new Country('CU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CV() : Country
    {
        return new Country('CV');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CW() : Country
    {
        return new Country('CW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CX() : Country
    {
        return new Country('CX');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CY() : Country
    {
        return new Country('CY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function CZ() : Country
    {
        return new Country('CZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function DE() : Country
    {
        return new Country('DE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function DJ() : Country
    {
        return new Country('DJ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function DK() : Country
    {
        return new Country('DK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function DM() : Country
    {
        return new Country('DM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function DO() : Country
    {
        return new Country('DO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function DZ() : Country
    {
        return new Country('DZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function EC() : Country
    {
        return new Country('EC');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function EE() : Country
    {
        return new Country('EE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function EG() : Country
    {
        return new Country('EG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function EH() : Country
    {
        return new Country('EH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ER() : Country
    {
        return new Country('ER');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ES() : Country
    {
        return new Country('ES');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ET() : Country
    {
        return new Country('ET');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function EU() : Country
    {
        return new Country('EU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function FI() : Country
    {
        return new Country('FI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function FJ() : Country
    {
        return new Country('FJ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function FK() : Country
    {
        return new Country('FK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function FM() : Country
    {
        return new Country('FM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function FO() : Country
    {
        return new Country('FO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function FR() : Country
    {
        return new Country('FR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GA() : Country
    {
        return new Country('GA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GB() : Country
    {
        return new Country('GB');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GD() : Country
    {
        return new Country('GD');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GE() : Country
    {
        return new Country('GE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GF() : Country
    {
        return new Country('GF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GG() : Country
    {
        return new Country('GG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GH() : Country
    {
        return new Country('GH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GI() : Country
    {
        return new Country('GI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GL() : Country
    {
        return new Country('GL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GM() : Country
    {
        return new Country('GM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GN() : Country
    {
        return new Country('GN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GP() : Country
    {
        return new Country('GP');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GQ() : Country
    {
        return new Country('GQ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GR() : Country
    {
        return new Country('GR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GS() : Country
    {
        return new Country('GS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GT() : Country
    {
        return new Country('GT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GU() : Country
    {
        return new Country('GU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GW() : Country
    {
        return new Country('GW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function GY() : Country
    {
        return new Country('GY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function HK() : Country
    {
        return new Country('HK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function HM() : Country
    {
        return new Country('HM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function HN() : Country
    {
        return new Country('HN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function HR() : Country
    {
        return new Country('HR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function HT() : Country
    {
        return new Country('HT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function HU() : Country
    {
        return new Country('HU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ID() : Country
    {
        return new Country('ID');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IE() : Country
    {
        return new Country('IE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IL() : Country
    {
        return new Country('IL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IM() : Country
    {
        return new Country('IM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IN() : Country
    {
        return new Country('IN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IO() : Country
    {
        return new Country('IO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IQ() : Country
    {
        return new Country('IQ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IR() : Country
    {
        return new Country('IR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IS() : Country
    {
        return new Country('IS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function IT() : Country
    {
        return new Country('IT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function JE() : Country
    {
        return new Country('JE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function JM() : Country
    {
        return new Country('JM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function JO() : Country
    {
        return new Country('JO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function JP() : Country
    {
        return new Country('JP');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KE() : Country
    {
        return new Country('KE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KG() : Country
    {
        return new Country('KG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KH() : Country
    {
        return new Country('KH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KI() : Country
    {
        return new Country('KI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KM() : Country
    {
        return new Country('KM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KN() : Country
    {
        return new Country('KN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KP() : Country
    {
        return new Country('KP');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KR() : Country
    {
        return new Country('KR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KW() : Country
    {
        return new Country('KW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KY() : Country
    {
        return new Country('KY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function KZ() : Country
    {
        return new Country('KZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LA() : Country
    {
        return new Country('LA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LB() : Country
    {
        return new Country('LB');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LC() : Country
    {
        return new Country('LC');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LI() : Country
    {
        return new Country('LI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LK() : Country
    {
        return new Country('LK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LR() : Country
    {
        return new Country('LR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LS() : Country
    {
        return new Country('LS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LT() : Country
    {
        return new Country('LT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LU() : Country
    {
        return new Country('LU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LV() : Country
    {
        return new Country('LV');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function LY() : Country
    {
        return new Country('LY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MA() : Country
    {
        return new Country('MA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MC() : Country
    {
        return new Country('MC');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MD() : Country
    {
        return new Country('MD');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ME() : Country
    {
        return new Country('ME');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MF() : Country
    {
        return new Country('MF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MG() : Country
    {
        return new Country('MG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MH() : Country
    {
        return new Country('MH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MK() : Country
    {
        return new Country('MK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ML() : Country
    {
        return new Country('ML');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MM() : Country
    {
        return new Country('MM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MN() : Country
    {
        return new Country('MN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MO() : Country
    {
        return new Country('MO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MP() : Country
    {
        return new Country('MP');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MQ() : Country
    {
        return new Country('MQ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MR() : Country
    {
        return new Country('MR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MS() : Country
    {
        return new Country('MS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MT() : Country
    {
        return new Country('MT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MU() : Country
    {
        return new Country('MU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MV() : Country
    {
        return new Country('MV');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MW() : Country
    {
        return new Country('MW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MX() : Country
    {
        return new Country('MX');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MY() : Country
    {
        return new Country('MY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function MZ() : Country
    {
        return new Country('MZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NA() : Country
    {
        return new Country('NA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NC() : Country
    {
        return new Country('NC');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NE() : Country
    {
        return new Country('NE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NF() : Country
    {
        return new Country('NF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NG() : Country
    {
        return new Country('NG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NI() : Country
    {
        return new Country('NI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NL() : Country
    {
        return new Country('NL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NO() : Country
    {
        return new Country('NO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NP() : Country
    {
        return new Country('NP');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NR() : Country
    {
        return new Country('NR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NU() : Country
    {
        return new Country('NU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function NZ() : Country
    {
        return new Country('NZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function OM() : Country
    {
        return new Country('OM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PA() : Country
    {
        return new Country('PA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PE() : Country
    {
        return new Country('PE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PF() : Country
    {
        return new Country('PF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PG() : Country
    {
        return new Country('PG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PH() : Country
    {
        return new Country('PH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PK() : Country
    {
        return new Country('PK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PL() : Country
    {
        return new Country('PL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PM() : Country
    {
        return new Country('PM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PN() : Country
    {
        return new Country('PN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PR() : Country
    {
        return new Country('PR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PS() : Country
    {
        return new Country('PS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PT() : Country
    {
        return new Country('PT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PW() : Country
    {
        return new Country('PW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function PY() : Country
    {
        return new Country('PY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function QA() : Country
    {
        return new Country('QA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function RE() : Country
    {
        return new Country('RE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function RO() : Country
    {
        return new Country('RO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function RS() : Country
    {
        return new Country('RS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function RU() : Country
    {
        return new Country('RU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function RW() : Country
    {
        return new Country('RW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SA() : Country
    {
        return new Country('SA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SB() : Country
    {
        return new Country('SB');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SC() : Country
    {
        return new Country('SC');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SD() : Country
    {
        return new Country('SD');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SE() : Country
    {
        return new Country('SE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SG() : Country
    {
        return new Country('SG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SH() : Country
    {
        return new Country('SH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SI() : Country
    {
        return new Country('SI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SJ() : Country
    {
        return new Country('SJ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SK() : Country
    {
        return new Country('SK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SL() : Country
    {
        return new Country('SL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SM() : Country
    {
        return new Country('SM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SN() : Country
    {
        return new Country('SN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SO() : Country
    {
        return new Country('SO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SR() : Country
    {
        return new Country('SR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SS() : Country
    {
        return new Country('SS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ST() : Country
    {
        return new Country('ST');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SV() : Country
    {
        return new Country('SV');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SX() : Country
    {
        return new Country('SX');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SY() : Country
    {
        return new Country('SY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function SZ() : Country
    {
        return new Country('SZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TC() : Country
    {
        return new Country('TC');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TD() : Country
    {
        return new Country('TD');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TF() : Country
    {
        return new Country('TF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TG() : Country
    {
        return new Country('TG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TH() : Country
    {
        return new Country('TH');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TJ() : Country
    {
        return new Country('TJ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TK() : Country
    {
        return new Country('TK');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TL() : Country
    {
        return new Country('TL');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TM() : Country
    {
        return new Country('TM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TN() : Country
    {
        return new Country('TN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TO() : Country
    {
        return new Country('TO');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TR() : Country
    {
        return new Country('TR');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TT() : Country
    {
        return new Country('TT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TV() : Country
    {
        return new Country('TV');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TW() : Country
    {
        return new Country('TW');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function TZ() : Country
    {
        return new Country('TZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function UA() : Country
    {
        return new Country('UA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function UG() : Country
    {
        return new Country('UG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function UM() : Country
    {
        return new Country('UM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function US() : Country
    {
        return new Country('US');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function UY() : Country
    {
        return new Country('UY');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function UZ() : Country
    {
        return new Country('UZ');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function VA() : Country
    {
        return new Country('VA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function VC() : Country
    {
        return new Country('VC');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function VE() : Country
    {
        return new Country('VE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function VG() : Country
    {
        return new Country('VG');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function VI() : Country
    {
        return new Country('VI');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function VN() : Country
    {
        return new Country('VN');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function VU() : Country
    {
        return new Country('VU');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function WF() : Country
    {
        return new Country('WF');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function WS() : Country
    {
        return new Country('WS');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function YE() : Country
    {
        return new Country('YE');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function YT() : Country
    {
        return new Country('YT');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ZA() : Country
    {
        return new Country('ZA');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ZM() : Country
    {
        return new Country('ZM');
    }

    /**
     * @codeCoverageIgnore
     *
     * @return Country
     */
    public static function ZW() : Country
    {
        return new Country('ZW');
    }
}
