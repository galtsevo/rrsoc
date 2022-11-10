{* Article Galleys *}
<br><br><br><br>
{if $primaryGalleys || $supplementaryGalleys}
    <div class="pkp_block block_galleys">
{*        <div class="title">*}
{*            <span>{translate key="common.download"}</span>*}
{*        </div>*}
        <div class="content download">
            {if $primaryGalleys}
                {foreach from=$primaryGalleys item=galley}
                    {if $galley->isPdfGalley()}
{*                        <div class="title">*}
{*                            <span>{translate key="common.download"}</span>*}
{*                        </div>*}
                        {include file="frontend/objects/galley_link.tpl" parent=$article purchaseFee=$currentJournal->getSetting('purchaseArticleFee') purchaseCurrency=$currentJournal->getSetting('currency')}
                    {else}
{*                        {assign var="type" value="file"}*}
                    {/if}

{*                    {if $galley->isMp3Galley()}*}
{*                        {include file="frontend/objects/galley_link.tpl" parent=$article purchaseFee=$currentJournal->getSetting('purchaseArticleFee') purchaseCurrency=$currentJournal->getSetting('currency')}*}
{*                    {/if}*}

                {/foreach}
            {/if}
{*            {if $supplementaryGalleys}*}
{*                {foreach from=$supplementaryGalleys item=galley}*}
{*                    {$supplementaryGalleys}*}
{*                    {include file="frontend/objects/galley_link.tpl" parent=$article isSupplementary="1"}*}
{*                {/foreach}*}
{*            {/if}*}
        </div>
    </div>
{/if}