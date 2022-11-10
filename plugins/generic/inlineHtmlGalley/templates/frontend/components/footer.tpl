{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

	</main>

	{* Sidebars *}
	{if empty($isFullWidth)}
		{capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
		{if $sidebarCode}
			<aside id="sidebar" class="pkp_structure_sidebar left col-xs-12 col-sm-2 col-md-4" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
				{$sidebarCode}
			</aside><!-- pkp_sidebar.left -->
		{/if}
	{/if}

</div>
</div><!-- pkp_structure_content -->

<div class="pkp_structure_footer_wrapper" role="contentinfo">
	<a id="pkp_content_footer"></a>
	<div class="pkp_structure_footer">

        {if $pageFooter}
			<div class="pkp_footer_content">
                {$pageFooter}
			</div>
        {/if}

        {*		<div class="pkp_brand_footer" role="complementary">*}
        {*			<a href="{url page="about" op="aboutThisPublishingSystem"}">*}
        {*				<img alt="{translate key="about.aboutThisPublishingSystem"}" src="{$baseUrl}/{$brandImage}">*}
        {*			</a>*}
        {*		</div>*}

	</div>

</div><!-- pkp_structure_footer_wrapper -->
{*	<div>*}
{*<img src="{$baseUrl}/plugins/themes/default/styles/images/forfooter.png" class="banner" style="width: 100%;">*}
{*	</div>*}
</div><!-- pkp_structure_page -->

{load_script context="frontend" scripts=$scripts}

{call_hook name="Templates::Common::Footer::PageFooter"}
<div id="mydiv"></div>
</body>
</html>
