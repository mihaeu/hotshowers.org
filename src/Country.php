<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

class Country
{
    /** @var string */
    private $iso3166;

    /**
     * @param string $iso3166
     */
    private function __construct(string $iso3166)
    {
        $this->iso3166 = $iso3166;
    }

    /**
     * @return string
     */
    public function iso3166()
    {
        return $this->iso3166;
    }

    /**
     * @return Country
     */
    public static function AD() : Country
    {
        return new Country('AD');
    }

    /**
     * @return Country
     */
    public static function AE() : Country
    {
        return new Country('AE');
    }

    /**
     * @return Country
     */
    public static function AF() : Country
    {
        return new Country('AF');
    }

    /**
     * @return Country
     */
    public static function AG() : Country
    {
        return new Country('AG');
    }

    /**
     * @return Country
     */
    public static function AI() : Country
    {
        return new Country('AI');
    }

    /**
     * @return Country
     */
    public static function AL() : Country
    {
        return new Country('AL');
    }

    /**
     * @return Country
     */
    public static function AM() : Country
    {
        return new Country('AM');
    }

    /**
     * @return Country
     */
    public static function AO() : Country
    {
        return new Country('AO');
    }

    /**
     * @return Country
     */
    public static function AP() : Country
    {
        return new Country('AP');
    }

    /**
     * @return Country
     */
    public static function AQ() : Country
    {
        return new Country('AQ');
    }

    /**
     * @return Country
     */
    public static function AR() : Country
    {
        return new Country('AR');
    }

    /**
     * @return Country
     */
    public static function AS() : Country
    {
        return new Country('AS');
    }

    /**
     * @return Country
     */
    public static function AT() : Country
    {
        return new Country('AT');
    }

    /**
     * @return Country
     */
    public static function AU() : Country
    {
        return new Country('AU');
    }

    /**
     * @return Country
     */
    public static function AW() : Country
    {
        return new Country('AW');
    }

    /**
     * @return Country
     */
    public static function AX() : Country
    {
        return new Country('AX');
    }

    /**
     * @return Country
     */
    public static function AZ() : Country
    {
        return new Country('AZ');
    }

    /**
     * @return Country
     */
    public static function BA() : Country
    {
        return new Country('BA');
    }

    /**
     * @return Country
     */
    public static function BB() : Country
    {
        return new Country('BB');
    }

    /**
     * @return Country
     */
    public static function BD() : Country
    {
        return new Country('BD');
    }

    /**
     * @return Country
     */
    public static function BE() : Country
    {
        return new Country('BE');
    }

    /**
     * @return Country
     */
    public static function BF() : Country
    {
        return new Country('BF');
    }

    /**
     * @return Country
     */
    public static function BG() : Country
    {
        return new Country('BG');
    }

    /**
     * @return Country
     */
    public static function BH() : Country
    {
        return new Country('BH');
    }

    /**
     * @return Country
     */
    public static function BI() : Country
    {
        return new Country('BI');
    }

    /**
     * @return Country
     */
    public static function BJ() : Country
    {
        return new Country('BJ');
    }

    /**
     * @return Country
     */
    public static function BL() : Country
    {
        return new Country('BL');
    }

    /**
     * @return Country
     */
    public static function BM() : Country
    {
        return new Country('BM');
    }

    /**
     * @return Country
     */
    public static function BN() : Country
    {
        return new Country('BN');
    }

    /**
     * @return Country
     */
    public static function BO() : Country
    {
        return new Country('BO');
    }

    /**
     * @return Country
     */
    public static function BQ() : Country
    {
        return new Country('BQ');
    }

    /**
     * @return Country
     */
    public static function BR() : Country
    {
        return new Country('BR');
    }

    /**
     * @return Country
     */
    public static function BS() : Country
    {
        return new Country('BS');
    }

    /**
     * @return Country
     */
    public static function BT() : Country
    {
        return new Country('BT');
    }

    /**
     * @return Country
     */
    public static function BV() : Country
    {
        return new Country('BV');
    }

    /**
     * @return Country
     */
    public static function BW() : Country
    {
        return new Country('BW');
    }

    /**
     * @return Country
     */
    public static function BY() : Country
    {
        return new Country('BY');
    }

    /**
     * @return Country
     */
    public static function BZ() : Country
    {
        return new Country('BZ');
    }

    /**
     * @return Country
     */
    public static function CA() : Country
    {
        return new Country('CA');
    }

    /**
     * @return Country
     */
    public static function CC() : Country
    {
        return new Country('CC');
    }

    /**
     * @return Country
     */
    public static function CD() : Country
    {
        return new Country('CD');
    }

    /**
     * @return Country
     */
    public static function CF() : Country
    {
        return new Country('CF');
    }

    /**
     * @return Country
     */
    public static function CG() : Country
    {
        return new Country('CG');
    }

    /**
     * @return Country
     */
    public static function CH() : Country
    {
        return new Country('CH');
    }

    /**
     * @return Country
     */
    public static function CI() : Country
    {
        return new Country('CI');
    }

    /**
     * @return Country
     */
    public static function CK() : Country
    {
        return new Country('CK');
    }

    /**
     * @return Country
     */
    public static function CL() : Country
    {
        return new Country('CL');
    }

    /**
     * @return Country
     */
    public static function CM() : Country
    {
        return new Country('CM');
    }

    /**
     * @return Country
     */
    public static function CN() : Country
    {
        return new Country('CN');
    }

    /**
     * @return Country
     */
    public static function CO() : Country
    {
        return new Country('CO');
    }

    /**
     * @return Country
     */
    public static function CR() : Country
    {
        return new Country('CR');
    }

    /**
     * @return Country
     */
    public static function CU() : Country
    {
        return new Country('CU');
    }

    /**
     * @return Country
     */
    public static function CV() : Country
    {
        return new Country('CV');
    }

    /**
     * @return Country
     */
    public static function CW() : Country
    {
        return new Country('CW');
    }

    /**
     * @return Country
     */
    public static function CX() : Country
    {
        return new Country('CX');
    }

    /**
     * @return Country
     */
    public static function CY() : Country
    {
        return new Country('CY');
    }

    /**
     * @return Country
     */
    public static function CZ() : Country
    {
        return new Country('CZ');
    }

    /**
     * @return Country
     */
    public static function DE() : Country
    {
        return new Country('DE');
    }

    /**
     * @return Country
     */
    public static function DJ() : Country
    {
        return new Country('DJ');
    }

    /**
     * @return Country
     */
    public static function DK() : Country
    {
        return new Country('DK');
    }

    /**
     * @return Country
     */
    public static function DM() : Country
    {
        return new Country('DM');
    }

    /**
     * @return Country
     */
    public static function DO() : Country
    {
        return new Country('DO');
    }

    /**
     * @return Country
     */
    public static function DZ() : Country
    {
        return new Country('DZ');
    }

    /**
     * @return Country
     */
    public static function EC() : Country
    {
        return new Country('EC');
    }

    /**
     * @return Country
     */
    public static function EE() : Country
    {
        return new Country('EE');
    }

    /**
     * @return Country
     */
    public static function EG() : Country
    {
        return new Country('EG');
    }

    /**
     * @return Country
     */
    public static function EH() : Country
    {
        return new Country('EH');
    }

    /**
     * @return Country
     */
    public static function ER() : Country
    {
        return new Country('ER');
    }

    /**
     * @return Country
     */
    public static function ES() : Country
    {
        return new Country('ES');
    }

    /**
     * @return Country
     */
    public static function ET() : Country
    {
        return new Country('ET');
    }

    /**
     * @return Country
     */
    public static function EU() : Country
    {
        return new Country('EU');
    }

    /**
     * @return Country
     */
    public static function FI() : Country
    {
        return new Country('FI');
    }

    /**
     * @return Country
     */
    public static function FJ() : Country
    {
        return new Country('FJ');
    }

    /**
     * @return Country
     */
    public static function FK() : Country
    {
        return new Country('FK');
    }

    /**
     * @return Country
     */
    public static function FM() : Country
    {
        return new Country('FM');
    }

    /**
     * @return Country
     */
    public static function FO() : Country
    {
        return new Country('FO');
    }

    /**
     * @return Country
     */
    public static function FR() : Country
    {
        return new Country('FR');
    }

    /**
     * @return Country
     */
    public static function GA() : Country
    {
        return new Country('GA');
    }

    /**
     * @return Country
     */
    public static function GB() : Country
    {
        return new Country('GB');
    }

    /**
     * @return Country
     */
    public static function GD() : Country
    {
        return new Country('GD');
    }

    /**
     * @return Country
     */
    public static function GE() : Country
    {
        return new Country('GE');
    }

    /**
     * @return Country
     */
    public static function GF() : Country
    {
        return new Country('GF');
    }

    /**
     * @return Country
     */
    public static function GG() : Country
    {
        return new Country('GG');
    }

    /**
     * @return Country
     */
    public static function GH() : Country
    {
        return new Country('GH');
    }

    /**
     * @return Country
     */
    public static function GI() : Country
    {
        return new Country('GI');
    }

    /**
     * @return Country
     */
    public static function GL() : Country
    {
        return new Country('GL');
    }

    /**
     * @return Country
     */
    public static function GM() : Country
    {
        return new Country('GM');
    }

    /**
     * @return Country
     */
    public static function GN() : Country
    {
        return new Country('GN');
    }

    /**
     * @return Country
     */
    public static function GP() : Country
    {
        return new Country('GP');
    }

    /**
     * @return Country
     */
    public static function GQ() : Country
    {
        return new Country('GQ');
    }

    /**
     * @return Country
     */
    public static function GR() : Country
    {
        return new Country('GR');
    }

    /**
     * @return Country
     */
    public static function GS() : Country
    {
        return new Country('GS');
    }

    /**
     * @return Country
     */
    public static function GT() : Country
    {
        return new Country('GT');
    }

    /**
     * @return Country
     */
    public static function GU() : Country
    {
        return new Country('GU');
    }

    /**
     * @return Country
     */
    public static function GW() : Country
    {
        return new Country('GW');
    }

    /**
     * @return Country
     */
    public static function GY() : Country
    {
        return new Country('GY');
    }

    /**
     * @return Country
     */
    public static function HK() : Country
    {
        return new Country('HK');
    }

    /**
     * @return Country
     */
    public static function HM() : Country
    {
        return new Country('HM');
    }

    /**
     * @return Country
     */
    public static function HN() : Country
    {
        return new Country('HN');
    }

    /**
     * @return Country
     */
    public static function HR() : Country
    {
        return new Country('HR');
    }

    /**
     * @return Country
     */
    public static function HT() : Country
    {
        return new Country('HT');
    }

    /**
     * @return Country
     */
    public static function HU() : Country
    {
        return new Country('HU');
    }

    /**
     * @return Country
     */
    public static function ID() : Country
    {
        return new Country('ID');
    }

    /**
     * @return Country
     */
    public static function IE() : Country
    {
        return new Country('IE');
    }

    /**
     * @return Country
     */
    public static function IL() : Country
    {
        return new Country('IL');
    }

    /**
     * @return Country
     */
    public static function IM() : Country
    {
        return new Country('IM');
    }

    /**
     * @return Country
     */
    public static function IN() : Country
    {
        return new Country('IN');
    }

    /**
     * @return Country
     */
    public static function IO() : Country
    {
        return new Country('IO');
    }

    /**
     * @return Country
     */
    public static function IQ() : Country
    {
        return new Country('IQ');
    }

    /**
     * @return Country
     */
    public static function IR() : Country
    {
        return new Country('IR');
    }

    /**
     * @return Country
     */
    public static function IS() : Country
    {
        return new Country('IS');
    }

    /**
     * @return Country
     */
    public static function IT() : Country
    {
        return new Country('IT');
    }

    /**
     * @return Country
     */
    public static function JE() : Country
    {
        return new Country('JE');
    }

    /**
     * @return Country
     */
    public static function JM() : Country
    {
        return new Country('JM');
    }

    /**
     * @return Country
     */
    public static function JO() : Country
    {
        return new Country('JO');
    }

    /**
     * @return Country
     */
    public static function JP() : Country
    {
        return new Country('JP');
    }

    /**
     * @return Country
     */
    public static function KE() : Country
    {
        return new Country('KE');
    }

    /**
     * @return Country
     */
    public static function KG() : Country
    {
        return new Country('KG');
    }

    /**
     * @return Country
     */
    public static function KH() : Country
    {
        return new Country('KH');
    }

    /**
     * @return Country
     */
    public static function KI() : Country
    {
        return new Country('KI');
    }

    /**
     * @return Country
     */
    public static function KM() : Country
    {
        return new Country('KM');
    }

    /**
     * @return Country
     */
    public static function KN() : Country
    {
        return new Country('KN');
    }

    /**
     * @return Country
     */
    public static function KP() : Country
    {
        return new Country('KP');
    }

    /**
     * @return Country
     */
    public static function KR() : Country
    {
        return new Country('KR');
    }

    /**
     * @return Country
     */
    public static function KW() : Country
    {
        return new Country('KW');
    }

    /**
     * @return Country
     */
    public static function KY() : Country
    {
        return new Country('KY');
    }

    /**
     * @return Country
     */
    public static function KZ() : Country
    {
        return new Country('KZ');
    }

    /**
     * @return Country
     */
    public static function LA() : Country
    {
        return new Country('LA');
    }

    /**
     * @return Country
     */
    public static function LB() : Country
    {
        return new Country('LB');
    }

    /**
     * @return Country
     */
    public static function LC() : Country
    {
        return new Country('LC');
    }

    /**
     * @return Country
     */
    public static function LI() : Country
    {
        return new Country('LI');
    }

    /**
     * @return Country
     */
    public static function LK() : Country
    {
        return new Country('LK');
    }

    /**
     * @return Country
     */
    public static function LR() : Country
    {
        return new Country('LR');
    }

    /**
     * @return Country
     */
    public static function LS() : Country
    {
        return new Country('LS');
    }

    /**
     * @return Country
     */
    public static function LT() : Country
    {
        return new Country('LT');
    }

    /**
     * @return Country
     */
    public static function LU() : Country
    {
        return new Country('LU');
    }

    /**
     * @return Country
     */
    public static function LV() : Country
    {
        return new Country('LV');
    }

    /**
     * @return Country
     */
    public static function LY() : Country
    {
        return new Country('LY');
    }

    /**
     * @return Country
     */
    public static function MA() : Country
    {
        return new Country('MA');
    }

    /**
     * @return Country
     */
    public static function MC() : Country
    {
        return new Country('MC');
    }

    /**
     * @return Country
     */
    public static function MD() : Country
    {
        return new Country('MD');
    }

    /**
     * @return Country
     */
    public static function ME() : Country
    {
        return new Country('ME');
    }

    /**
     * @return Country
     */
    public static function MF() : Country
    {
        return new Country('MF');
    }

    /**
     * @return Country
     */
    public static function MG() : Country
    {
        return new Country('MG');
    }

    /**
     * @return Country
     */
    public static function MH() : Country
    {
        return new Country('MH');
    }

    /**
     * @return Country
     */
    public static function MK() : Country
    {
        return new Country('MK');
    }

    /**
     * @return Country
     */
    public static function ML() : Country
    {
        return new Country('ML');
    }

    /**
     * @return Country
     */
    public static function MM() : Country
    {
        return new Country('MM');
    }

    /**
     * @return Country
     */
    public static function MN() : Country
    {
        return new Country('MN');
    }

    /**
     * @return Country
     */
    public static function MO() : Country
    {
        return new Country('MO');
    }

    /**
     * @return Country
     */
    public static function MP() : Country
    {
        return new Country('MP');
    }

    /**
     * @return Country
     */
    public static function MQ() : Country
    {
        return new Country('MQ');
    }

    /**
     * @return Country
     */
    public static function MR() : Country
    {
        return new Country('MR');
    }

    /**
     * @return Country
     */
    public static function MS() : Country
    {
        return new Country('MS');
    }

    /**
     * @return Country
     */
    public static function MT() : Country
    {
        return new Country('MT');
    }

    /**
     * @return Country
     */
    public static function MU() : Country
    {
        return new Country('MU');
    }

    /**
     * @return Country
     */
    public static function MV() : Country
    {
        return new Country('MV');
    }

    /**
     * @return Country
     */
    public static function MW() : Country
    {
        return new Country('MW');
    }

    /**
     * @return Country
     */
    public static function MX() : Country
    {
        return new Country('MX');
    }

    /**
     * @return Country
     */
    public static function MY() : Country
    {
        return new Country('MY');
    }

    /**
     * @return Country
     */
    public static function MZ() : Country
    {
        return new Country('MZ');
    }

    /**
     * @return Country
     */
    public static function NA() : Country
    {
        return new Country('NA');
    }

    /**
     * @return Country
     */
    public static function NC() : Country
    {
        return new Country('NC');
    }

    /**
     * @return Country
     */
    public static function NE() : Country
    {
        return new Country('NE');
    }

    /**
     * @return Country
     */
    public static function NF() : Country
    {
        return new Country('NF');
    }

    /**
     * @return Country
     */
    public static function NG() : Country
    {
        return new Country('NG');
    }

    /**
     * @return Country
     */
    public static function NI() : Country
    {
        return new Country('NI');
    }

    /**
     * @return Country
     */
    public static function NL() : Country
    {
        return new Country('NL');
    }

    /**
     * @return Country
     */
    public static function NO() : Country
    {
        return new Country('NO');
    }

    /**
     * @return Country
     */
    public static function NP() : Country
    {
        return new Country('NP');
    }

    /**
     * @return Country
     */
    public static function NR() : Country
    {
        return new Country('NR');
    }

    /**
     * @return Country
     */
    public static function NU() : Country
    {
        return new Country('NU');
    }

    /**
     * @return Country
     */
    public static function NZ() : Country
    {
        return new Country('NZ');
    }

    /**
     * @return Country
     */
    public static function OM() : Country
    {
        return new Country('OM');
    }

    /**
     * @return Country
     */
    public static function PA() : Country
    {
        return new Country('PA');
    }

    /**
     * @return Country
     */
    public static function PE() : Country
    {
        return new Country('PE');
    }

    /**
     * @return Country
     */
    public static function PF() : Country
    {
        return new Country('PF');
    }

    /**
     * @return Country
     */
    public static function PG() : Country
    {
        return new Country('PG');
    }

    /**
     * @return Country
     */
    public static function PH() : Country
    {
        return new Country('PH');
    }

    /**
     * @return Country
     */
    public static function PK() : Country
    {
        return new Country('PK');
    }

    /**
     * @return Country
     */
    public static function PL() : Country
    {
        return new Country('PL');
    }

    /**
     * @return Country
     */
    public static function PM() : Country
    {
        return new Country('PM');
    }

    /**
     * @return Country
     */
    public static function PN() : Country
    {
        return new Country('PN');
    }

    /**
     * @return Country
     */
    public static function PR() : Country
    {
        return new Country('PR');
    }

    /**
     * @return Country
     */
    public static function PS() : Country
    {
        return new Country('PS');
    }

    /**
     * @return Country
     */
    public static function PT() : Country
    {
        return new Country('PT');
    }

    /**
     * @return Country
     */
    public static function PW() : Country
    {
        return new Country('PW');
    }

    /**
     * @return Country
     */
    public static function PY() : Country
    {
        return new Country('PY');
    }

    /**
     * @return Country
     */
    public static function QA() : Country
    {
        return new Country('QA');
    }

    /**
     * @return Country
     */
    public static function RE() : Country
    {
        return new Country('RE');
    }

    /**
     * @return Country
     */
    public static function RO() : Country
    {
        return new Country('RO');
    }

    /**
     * @return Country
     */
    public static function RS() : Country
    {
        return new Country('RS');
    }

    /**
     * @return Country
     */
    public static function RU() : Country
    {
        return new Country('RU');
    }

    /**
     * @return Country
     */
    public static function RW() : Country
    {
        return new Country('RW');
    }

    /**
     * @return Country
     */
    public static function SA() : Country
    {
        return new Country('SA');
    }

    /**
     * @return Country
     */
    public static function SB() : Country
    {
        return new Country('SB');
    }

    /**
     * @return Country
     */
    public static function SC() : Country
    {
        return new Country('SC');
    }

    /**
     * @return Country
     */
    public static function SD() : Country
    {
        return new Country('SD');
    }

    /**
     * @return Country
     */
    public static function SE() : Country
    {
        return new Country('SE');
    }

    /**
     * @return Country
     */
    public static function SG() : Country
    {
        return new Country('SG');
    }

    /**
     * @return Country
     */
    public static function SH() : Country
    {
        return new Country('SH');
    }

    /**
     * @return Country
     */
    public static function SI() : Country
    {
        return new Country('SI');
    }

    /**
     * @return Country
     */
    public static function SJ() : Country
    {
        return new Country('SJ');
    }

    /**
     * @return Country
     */
    public static function SK() : Country
    {
        return new Country('SK');
    }

    /**
     * @return Country
     */
    public static function SL() : Country
    {
        return new Country('SL');
    }

    /**
     * @return Country
     */
    public static function SM() : Country
    {
        return new Country('SM');
    }

    /**
     * @return Country
     */
    public static function SN() : Country
    {
        return new Country('SN');
    }

    /**
     * @return Country
     */
    public static function SO() : Country
    {
        return new Country('SO');
    }

    /**
     * @return Country
     */
    public static function SR() : Country
    {
        return new Country('SR');
    }

    /**
     * @return Country
     */
    public static function SS() : Country
    {
        return new Country('SS');
    }

    /**
     * @return Country
     */
    public static function ST() : Country
    {
        return new Country('ST');
    }

    /**
     * @return Country
     */
    public static function SV() : Country
    {
        return new Country('SV');
    }

    /**
     * @return Country
     */
    public static function SX() : Country
    {
        return new Country('SX');
    }

    /**
     * @return Country
     */
    public static function SY() : Country
    {
        return new Country('SY');
    }

    /**
     * @return Country
     */
    public static function SZ() : Country
    {
        return new Country('SZ');
    }

    /**
     * @return Country
     */
    public static function TC() : Country
    {
        return new Country('TC');
    }

    /**
     * @return Country
     */
    public static function TD() : Country
    {
        return new Country('TD');
    }

    /**
     * @return Country
     */
    public static function TF() : Country
    {
        return new Country('TF');
    }

    /**
     * @return Country
     */
    public static function TG() : Country
    {
        return new Country('TG');
    }

    /**
     * @return Country
     */
    public static function TH() : Country
    {
        return new Country('TH');
    }

    /**
     * @return Country
     */
    public static function TJ() : Country
    {
        return new Country('TJ');
    }

    /**
     * @return Country
     */
    public static function TK() : Country
    {
        return new Country('TK');
    }

    /**
     * @return Country
     */
    public static function TL() : Country
    {
        return new Country('TL');
    }

    /**
     * @return Country
     */
    public static function TM() : Country
    {
        return new Country('TM');
    }

    /**
     * @return Country
     */
    public static function TN() : Country
    {
        return new Country('TN');
    }

    /**
     * @return Country
     */
    public static function TO() : Country
    {
        return new Country('TO');
    }

    /**
     * @return Country
     */
    public static function TR() : Country
    {
        return new Country('TR');
    }

    /**
     * @return Country
     */
    public static function TT() : Country
    {
        return new Country('TT');
    }

    /**
     * @return Country
     */
    public static function TV() : Country
    {
        return new Country('TV');
    }

    /**
     * @return Country
     */
    public static function TW() : Country
    {
        return new Country('TW');
    }

    /**
     * @return Country
     */
    public static function TZ() : Country
    {
        return new Country('TZ');
    }

    /**
     * @return Country
     */
    public static function UA() : Country
    {
        return new Country('UA');
    }

    /**
     * @return Country
     */
    public static function UG() : Country
    {
        return new Country('UG');
    }

    /**
     * @return Country
     */
    public static function UM() : Country
    {
        return new Country('UM');
    }

    /**
     * @return Country
     */
    public static function US() : Country
    {
        return new Country('US');
    }

    /**
     * @return Country
     */
    public static function UY() : Country
    {
        return new Country('UY');
    }

    /**
     * @return Country
     */
    public static function UZ() : Country
    {
        return new Country('UZ');
    }

    /**
     * @return Country
     */
    public static function VA() : Country
    {
        return new Country('VA');
    }

    /**
     * @return Country
     */
    public static function VC() : Country
    {
        return new Country('VC');
    }

    /**
     * @return Country
     */
    public static function VE() : Country
    {
        return new Country('VE');
    }

    /**
     * @return Country
     */
    public static function VG() : Country
    {
        return new Country('VG');
    }

    /**
     * @return Country
     */
    public static function VI() : Country
    {
        return new Country('VI');
    }

    /**
     * @return Country
     */
    public static function VN() : Country
    {
        return new Country('VN');
    }

    /**
     * @return Country
     */
    public static function VU() : Country
    {
        return new Country('VU');
    }

    /**
     * @return Country
     */
    public static function WF() : Country
    {
        return new Country('WF');
    }

    /**
     * @return Country
     */
    public static function WS() : Country
    {
        return new Country('WS');
    }

    /**
     * @return Country
     */
    public static function YE() : Country
    {
        return new Country('YE');
    }

    /**
     * @return Country
     */
    public static function YT() : Country
    {
        return new Country('YT');
    }

    /**
     * @return Country
     */
    public static function ZA() : Country
    {
        return new Country('ZA');
    }

    /**
     * @return Country
     */
    public static function ZM() : Country
    {
        return new Country('ZM');
    }

    /**
     * @return Country
     */
    public static function ZW() : Country
    {
        return new Country('ZW');
    }
}
