<?php


namespace NicklasW\PkmGoApi\Api\Player\Data\Profile;

use NicklasW\PkmGoApi\Api\Data\Data as ApiData;
use POGOProtos\Data\PlayerData;

class ProfileData extends ApiData {

    /**
     * @var string The creation time
     */
    protected $creationTime;

    /**
     * @var string The username
     */
    protected $username;

    /**
     * @var integer
     */
    protected $team;

    /**
     * @var TutorialState
     */
    protected $tutorialState;

    /**
     * @var Avatar
     */
    protected $avatar;

    /**
     * @var int
     */
    protected $pokemonStorage;

    /**
     * @var int
     */
    protected $itemStorage;

    /**
     * @var DailyBonus
     */
    protected $dailyBonus;

    /**
     * @var Badge
     */
    protected $badge;

    /**
     * @var ContactSettings
     */
    protected $contactSettings;

    /**
     * @var Currencies
     */
    protected $currencies;

    /**
     * Creates a data instance from a Protobuf Message.
     *
     * @param PlayerData $data
     * @return static
     */
    public static function create($data)
    {
        // Creates a instance of ProfileData
        $instance = new static();

        // Set the username
        $instance->username = $data->getUsername();

        // Set the team
        $instance->team = $data->getTeam();

        // Set the creation time
        $instance->creationTime = $data->getCreationTimestampMs();

        // Crates the tutorial state
        $instance->tutorialState = TutorialState::create($data->getTutorialStateArray());

        // Creates the player avatar
        $instance->avatar = Avatar::create($data->getAvatar());

        // Set the pokemon storage
        $instance->pokemonStorage = $data->getMaxPokemonStorage();

        // Set the item storage
        $instance->itemStorage = $data->getMaxItemStorage();

        // Set the daily bonus
        $instance->dailyBonus = DailyBonus::create($data->getDailyBonus());

        // Set the equipped badge
        $instance->badge = Badge::create($data->getEquippedBadge());

        // Set the contact settings
        $instance->contactSettings = ContactSettings::create($data->getContactSettings());

        // Sets the player currencies
        $instance->currencies = Currencies::create($data->getCurrenciesArray());

        return $instance;
    }


}