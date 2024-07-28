<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Enums;

/**
 * @property-read value-of<Locale::VALUES> $value
 *
 * TODO: convert to a backed enum when PHP 8.1 is the minimum version.
 */
final class Locale
{
    /**
     * @use BackedEnum<string>
     */
    use BackedEnum;

    public const arEG = 'ar_EG';
    public const arJO = 'ar_JO';
    public const arSA = 'ar_SA';
    public const atAT = 'at_AT';
    public const bgBG = 'bg_BG';
    public const bnBD = 'bn_BD';
    public const csCZ = 'cs_CZ';
    public const daDK = 'da_DK';
    public const deAT = 'de_AT';
    public const deCH = 'de_CH';
    public const deDE = 'de_DE';
    public const elCY = 'el_CY';
    public const elGR = 'el_GR';
    public const enAU = 'en_AU';
    public const enCA = 'en_CA';
    public const enGB = 'en_GB';
    public const enHK = 'en_HK';
    public const enIN = 'en_IN';
    public const enNG = 'en_NG';
    public const enNZ = 'en_NZ';
    public const enPH = 'en_PH';
    public const enSG = 'en_SG';
    public const enUG = 'en_UG';
    public const enUS = 'en_US';
    public const enZA = 'en_ZA';
    public const esAR = 'es_AR';
    public const esES = 'es_ES';
    public const esPE = 'es_PE';
    public const esVE = 'es_VE';
    public const etEE = 'et_EE';
    public const faIR = 'fa_IR';
    public const fiFI = 'fi_FI';
    public const frBE = 'fr_BE';
    public const frCA = 'fr_CA';
    public const frCH = 'fr_CH';
    public const frFR = 'fr_FR';
    public const heIL = 'he_IL';
    public const hrHR = 'hr_HR';
    public const huHU = 'hu_HU';
    public const hyAM = 'hy_AM';
    public const idID = 'id_ID';
    public const isIS = 'is_IS';
    public const itCH = 'it_CH';
    public const itIT = 'it_IT';
    public const jaJP = 'ja_JP';
    public const kaGE = 'ka_GE';
    public const kkKZ = 'kk_KZ';
    public const koKR = 'ko_KR';
    public const ltLT = 'lt_LT';
    public const lvLV = 'lv_LV';
    public const meME = 'me_ME';
    public const mnMN = 'mn_MN';
    public const msMY = 'ms_MY';
    public const nbNO = 'nb_NO';
    public const neNP = 'ne_NP';
    public const nlBE = 'nl_BE';
    public const nlNL = 'nl_NL';
    public const plPL = 'pl_PL';
    public const ptBR = 'pt_BR';
    public const ptPT = 'pt_PT';
    public const roMD = 'ro_MD';
    public const roRO = 'ro_RO';
    public const ruRU = 'ru_RU';
    public const skSK = 'sk_SK';
    public const slSI = 'sl_SI';
    public const srCyrlRS = 'sr_Cyrl_RS';
    public const srLatnRS = 'sr_Latn_RS';
    public const srRS = 'sr_RS';
    public const svSE = 'sv_SE';
    public const thTH = 'th_TH';
    public const trTR = 'tr_TR';
    public const ukUA = 'uk_UA';
    public const viVN = 'vi_VN';
    public const zhCN = 'zh_CN';
    public const zhTW = 'zh_TW';

    private const VALUES = [
        self::arEG,
        self::arJO,
        self::arSA,
        self::atAT,
        self::bgBG,
        self::bnBD,
        self::csCZ,
        self::daDK,
        self::deAT,
        self::deCH,
        self::deDE,
        self::elCY,
        self::elGR,
        self::enAU,
        self::enCA,
        self::enGB,
        self::enHK,
        self::enIN,
        self::enNG,
        self::enNZ,
        self::enPH,
        self::enSG,
        self::enUG,
        self::enUS,
        self::enZA,
        self::esAR,
        self::esES,
        self::esPE,
        self::esVE,
        self::etEE,
        self::faIR,
        self::fiFI,
        self::frBE,
        self::frCA,
        self::frCH,
        self::frFR,
        self::heIL,
        self::hrHR,
        self::huHU,
        self::hyAM,
        self::idID,
        self::isIS,
        self::itCH,
        self::itIT,
        self::jaJP,
        self::kaGE,
        self::kkKZ,
        self::koKR,
        self::ltLT,
        self::lvLV,
        self::meME,
        self::mnMN,
        self::msMY,
        self::nbNO,
        self::neNP,
        self::nlBE,
        self::nlNL,
        self::plPL,
        self::ptBR,
        self::ptPT,
        self::roMD,
        self::roRO,
        self::ruRU,
        self::skSK,
        self::slSI,
        self::srCyrlRS,
        self::srLatnRS,
        self::srRS,
        self::svSE,
        self::thTH,
        self::trTR,
        self::ukUA,
        self::viVN,
        self::zhCN,
        self::zhTW,
    ];
}
