<?php
namespace SearchPortal\Plugins;

class DuckDuckGoSearchEnginePlugin implements SearchEnginePluginInterface {
    /**
     * Gets the slug for the search engine.
     *
     * @return string
     */
    public function getSlug() {
        return 'duckduckgo';
    }

    /**
     * Gets the display name of the search engine.
     *
     * @return string
     */
    function getDisplayName()
    {
        return 'DuckDuckGo';
    }

    /**
     * Constructs the search URL.
     *
     * @param $query string Query string to search for
     * @return string
     */
    function constructSearchUrl($query)
    {
        return 'https://duckduckgo.com/?q=' . $query;
    }
}