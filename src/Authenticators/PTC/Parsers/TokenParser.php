<?php

namespace NicklasW\PkmGoApi\Authenticators\PTC\Parsers;

use NicklasW\PkmGoApi\Authenticators\PTC\Parsers\Results\AuthenticationInformationResult;
use NicklasW\PkmGoApi\Authenticators\PTC\Parsers\Results\TicketResult;
use NicklasW\PkmGoApi\Authenticators\PTC\Parsers\Results\TokenResult;
use PHPHtmlParser\Dom;
use Psr\Http\Message\ResponseInterface;

class TokenParser extends Parser {

    /**
     * Authenticate constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The method which parses the content.
     *
     * @param ResponseInterface $content
     * @return TokenResult
     */
    public function parse($content)
    {
        // Retrieve the content from the response content
        $content = $content->getBody()->getContents();

        return new TokenResult(array('token' => $this->parseToken($content)));
    }

    /**
     * Returns the parsed ticket.
     *
     * @param string $content
     * @return string mixed
     */
    protected function parseToken($content)
    {
        $matches = array();

        preg_match('/access_token=(?<token>.*)&expires/', $content, $matches);

        return $matches['token'];
    }

}