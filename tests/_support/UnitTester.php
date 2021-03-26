<?php
/**
 * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
 * Copyright (C) 2021 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see http://www.gnu.org/licenses.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */


namespace App\Tests;

use App\Tests\Helper\Unit as Tester;
use Codeception\Actor;
use Codeception\Lib\Friend;
use App\Engine\LegacyHandler\LegacyScopeState;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
 */
class UnitTester extends Actor
{
    /**
     * @return LegacyScopeState
     */
    public function getLegacyScope(): LegacyScopeState
    {
        return Tester::$legacyScope;
    }

    /**
     * @return string
     */
    public function getProjectDir(): string
    {
        return Tester::$projectDir;
    }

    /**
     * @return string
     */
    public function getLegacyDir(): string
    {
        return Tester::$legacyDir;
    }

    /**
     * @return string
     */
    public function getLegacySessionName(): string
    {
        return Tester::$legacySessionName;
    }

    /**
     * @return string
     */
    public function getDefaultSessionName(): string
    {
        return Tester::$defaultSessionName;
    }

    /**
     * @return array
     */
    public function getDatetimeFormatMap(): array
    {
        return Tester::$datetimeFormatMap;
    }
}
