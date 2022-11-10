{**
 * plugins/generic/inlineHtmlGalley/blockHowToCite.tpl
 *
 * Copyright (c) University of Pittsburgh
 * Distributed under the GNU GPL v2 or later. For full terms see the file docs/COPYING.
 *
 * Inline HTML Galley How To Cite block
 *
 *}
{* How to cite *}
{if $citation}
    <div class="pkp_block block_inline_html_how_to_cite how-to-cite">
        <div class="title">
            {translate key="submission.howToCite"}
            <img style="width: 30px;vertical-align: middle;border: 1px solid #dcb86d;border-radius: 50%;justify-self: end;" class="issue_button_statistic" src="{$baseUrl}/plugins/themes/default/styles/images/quote.png">
        </div>
        <div class="content">
            <div id="citationOutput" role="region" aria-live="polite">
                {$citation}
            </div>
            <div class="btn-group">
                <button style="/*background: #f5f5f5;*/" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-controls="cslCitationFormats">
                {translate key="submission.howToCite.citationFormats"}
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    {foreach from=$citationStyles item="citationStyle"}
                        <li>
                            <a
                                aria-controls="citationOutput"
                                href="{url page="citationstylelanguage" op="get" path=$citationStyle.id params=$citationArgs}"
                                data-load-citation
                                data-json-href="{url page="citationstylelanguage" op="get" path=$citationStyle.id params=$citationArgsJson}"
                            >
                                {$citationStyle.title|escape}
                            </a>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>
{/if}

<br>
{* Metric*}
<div class="pkp_block block_inline_html_published_date">
    <div class="content_views">
        {translate key="article.numberofviews"}
        <SPAN style="border: 1px solid; border-radius: 50%; padding: 5px;font-size: 14px;background: #fff;color: #dcb86d;">{$article->getViews()}</SPAN>
        {if is_a($article, 'PublishedArticle')}{assign var=galleys value=$article->getGalleys()}{/if}</br>
        {if $galleys}
            {foreach from=$galleys item=galley name=galleyList}
                {translate key="article.numberofdownloads"} <SPAN style="color: #0a0a0a">{$galley->getViews()}</SPAN>
            {/foreach}
        {/if}
    </div>
</div>
<br>