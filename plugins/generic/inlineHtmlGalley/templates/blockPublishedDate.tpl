{**
 * plugins/generic/inlineHtmlGalley/blockPublishedDate.tpl
 *
 * Copyright (c) University of Pittsburgh
 * Distributed under the GNU GPL v2 or later. For full terms see the file docs/COPYING.
 *
 * Inline HTML Galley Published Date block
 *
 * @uses $pubIdPlugins Array of pubId plugins which this article may be assigned
 *
 *}
{*Issue*}
{if $article->getDatePublished()}
    <div class="pkp_block block_inline_html_published_date">
        <div class="content_views">
            <a href="{url page="issue" op="view" path=$issue->getBestIssueId()}">
                {$issue->getIssueIdentification()}
                <img class="issue_button" src="{$baseUrl}/plugins/themes/default/styles/images/double_down.png">
            </a>
        </div>
    </div>
{/if}
<br>

{*Share*}
<div class="pkp_block block_inline_html_published_date" style="border: unset;">
{*        <span class="title published_date_label">*}
{*            {translate key="submissions.cite"}*}
{*        </span>*}
    <div class="content">
        <div class="published_date">
                <span class="published_date_value">
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-curtain data-size="l" data-shape="round" data-color-scheme="blackwhite" data-limit="3" data-services="vkontakte,odnoklassniki,telegram,viber,whatsapp,moimir,skype,linkedin"></div>
                </span>
        </div>
    </div>
</div>


<br>

{* Published date *}
{*{if $article->getDatePublished()}*}
{*    <div class="pkp_block block_inline_html_published_date">*}
{*        <span class="title published_date_label">*}
{*            {translate key="submissions.published"}*}
{*            <span>ИНФОРАМЦИЯ</span>*}
{*            <img style="width: 30px;vertical-align: middle;border: 1px solid #dcb86d;border-radius: 50%;justify-self: end;" class="issue_button_statistic" src="http://localhost/rrsoc/plugins/themes/default/styles/images/info_art.png">*}
{*        </span>*}
{*        <div class="content">*}
{*            <div class="published_date" style="text-align: center;">*}
{*                <span class="published_date_value">*}
{*                    {$article->getDatePublished()|date_format:$dateFormatLong}*}
{*                </span>*}
{*            </div>*}
{*        </div>*}
{*    </div>*}
{*{/if}*}
