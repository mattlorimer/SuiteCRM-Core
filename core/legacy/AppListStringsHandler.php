<?php


namespace SuiteCRM\Core\Legacy;


use ApiPlatform\Core\Exception\ItemNotFoundException;
use App\Entity\AppListStrings;

class AppListStringsHandler extends LegacyHandler
{
    protected const MSG_LANGUAGE_NOT_FOUND = 'Not able to get language: ';

    /**
     * Get app list strings for given $language
     * @param $language
     * @return AppListStrings|null
     */
    public function getAppListStrings(string $language): ?AppListStrings
    {
        $this->init();

        if (empty($language)) {
            return null;
        }

        $enabledLanguages = get_languages();

        if (empty($enabledLanguages) || !array_key_exists($language, $enabledLanguages)) {
            throw new ItemNotFoundException(self::MSG_LANGUAGE_NOT_FOUND . "'$language'");
        }

        $appListStringsArray = return_app_list_strings_language($language);

        if (empty($appListStringsArray)) {
            throw new ItemNotFoundException(self::MSG_LANGUAGE_NOT_FOUND . "'$language'");
        }

        $appListStrings = new AppListStrings();
        $appListStrings->setId($language);
        $appListStrings->setItems($appListStringsArray);

        $this->close();

        return $appListStrings;
    }
}