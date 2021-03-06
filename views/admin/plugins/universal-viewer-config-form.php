<?php
$elements = get_table_options('Element', null, array(
    'record_types' => array(null, 'All'),
    'sort' => 'alphaBySet',
));
?>
<fieldset id="fieldset-universalviewer-manifest"><legend><?php echo __('Manifest'); ?></legend>
    <p class="explanation">
        <?php echo __('The plugin creates a manifest for the viewer with elements from each record (item or collection).'); ?>
        <?php echo __('The elements below are used when some metadata are missing.'); ?>
        <?php echo __('In all cases, empty elements are not displayed.'); ?>
        <?php echo __('Futhermore, the filter "uv_manifest" is available to change any data.'); ?>
    </p>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_manifest_description_element', __('Element to use for Description')); ?>
        </div>
        <div class='inputs five columns omega'>
            <?php
                echo $this->formSelect('universalviewer_manifest_description_element',
                    $element_ids['description'],
                    array(),
                    $elements);
            ?>
            <p class="explanation">
                <?php echo __('If any, the first metadata of the record will be added in all manifests and viewers for main description.'); ?>
                <?php echo __('It’s recommended to use "Dublin Core:Bibliographic Citation" when the plugin Dublin Core Extended is enabled.'); ?>
                <?php echo __('For collections, the element "Dublin Core Description" is always used.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_manifest_description_default', __('Default Description')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formCheckbox('universalviewer_manifest_description_default', true,
                array('checked' => (boolean) get_option('universalviewer_manifest_description_default'))); ?>
            <p class="explanation">
                <?php echo __('If checked, and if there is no metadata for the element above, the Omeka citation will be added in all manifests and viewers as main description.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_manifest_attribution_element', __('Element to use for Attribution')); ?>
        </div>
        <div class='inputs five columns omega'>
            <?php
                echo $this->formSelect('universalviewer_manifest_attribution_element',
                    $element_ids['attribution'],
                    array(),
                    $elements);
            ?>
            <p class="explanation">
                <?php echo __('If any, the first metadata of the record will be added in all manifests and viewers to indicate the attribution.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_manifest_attribution_default', __('Default Attribution')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formText('universalviewer_manifest_attribution_default', get_option('universalviewer_manifest_attribution_default'), null); ?>
            <p class="explanation">
                <?php echo __('If any, and if there is no metadata for the element above, this text will be added in all manifests and viewers.'); ?>
                <?php echo __('It will be used as pop up in the viewer too, if enabled.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_manifest_license_element', __('Element to use for License')); ?>
        </div>
        <div class='inputs five columns omega'>
            <?php
                echo $this->formSelect('universalviewer_manifest_license_element',
                    $element_ids['license'],
                    array(),
                    $elements);
            ?>
            <p class="explanation">
                <?php echo __('If any, the first metadata of the record will be added in all manifests and viewers to indicate the license.'); ?>
                <?php echo __('It’s recommended to use "Dublin Core:Rights" (or "Dublin Core:License" when the plugin Dublin Core Extended is enabled).'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_manifest_license_default', __('Default License')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formText('universalviewer_manifest_license_default', get_option('universalviewer_manifest_license_default'), null); ?>
            <p class="explanation">
                <?php echo __('If any, and if there is no metadata for the element above, this text will be added in all manifests and viewers to indicate the license.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_manifest_logo_default', __('Logo')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formText('universalviewer_manifest_logo_default', get_option('universalviewer_manifest_logo_default'), null); ?>
            <p class="explanation">
                <?php echo __('If any, this url to an image will be used as logo and displayed in the right panel.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_alternative_manifest_element',
                __('Alternative Manifest Source')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php
                echo $this->formSelect('universalviewer_alternative_manifest_element',
                    $element_ids['manifest'],
                    array(),
                    $elements);
            ?>
            <p class="explanation">
                <?php echo __('If any, the element/field supplying the alternative manifest URL for the viewer, for example "Dublin Core:Has Format".'); ?>
            </p>
        </div>
    </div>
</fieldset>
<fieldset id="fieldset-universalviewer-embed"><legend><?php echo __('Integration of the viewer'); ?></legend>
    <p class="explanation">
        <?php echo __('If checked, the viewer will be automatically appended to the collections or items pages.'); ?>
        <?php echo __('Else, the viewer can be added via the helper in the theme or the shortcode in any page.'); ?>
    </p>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_append_collections_show',
                __('Append to "Collection show"')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formCheckbox('universalviewer_append_collections_show', true,
                array('checked' => (boolean) get_option('universalviewer_append_collections_show'))); ?>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_append_items_show',
                __('Append to "Item show"')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formCheckbox('universalviewer_append_items_show', true,
                array('checked' => (boolean) get_option('universalviewer_append_items_show'))); ?>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_append_collections_browse',
                __('Append to "Collections browse"')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formCheckbox('universalviewer_append_collections_browse', true,
                array('checked' => (boolean) get_option('universalviewer_append_collections_browse'))); ?>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_append_items_browse',
                __('Append to "Items browse"')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formCheckbox('universalviewer_append_items_browse', true,
                array('checked' => (boolean) get_option('universalviewer_append_items_browse'))); ?>
        </div>
    </div>
    <p class="explanation">
        <?php echo __('These values allows to parameter the integration of the viewer in Omeka pages.'); ?>
        <?php echo __('The viewer itself can be configured via the file "config.json" and the helper.'); ?>
    </p>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_class',
                __('Class of main div')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formText('universalviewer_class', get_option('universalviewer_class'), null); ?>
            <p class="explanation">
                <?php echo __('Class to add to the main div.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_style',
                __('Inline Style')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formText('universalviewer_style', get_option('universalviewer_style'), null); ?>
            <p class="explanation">
                <?php echo __('If any, this style will be added to the main div of the Universal Viewer.'); ?>
                <?php echo __('The height may be required.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_locale',
                __('Locales of the viewer')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formText('universalviewer_locale', get_option('universalviewer_locale'), null); ?>
        </div>
    </div>
</fieldset>
<fieldset id="fieldset-universalviewer-background"><legend><?php echo __('Image Server'); ?></legend>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_iiif_creator',
                __('Image Processor')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php
                echo $this->formSelect('universalviewer_iiif_creator', get_option('universalviewer_iiif_creator'), array(), $processors);
            ?>
            <p class="explanation">
                <?php echo __('Images may be processed internally before to be sent to browser.'); ?>
                <?php echo __('Generally, GD is a little faster than ImageMagick, but ImageMagick manages more formats.'); ?>
                <?php echo __('Nevertheless, the performance depends on your installation and your server.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_iiif_max_size',
                __('Max dynamic size for images')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formText('universalviewer_iiif_max_size', get_option('universalviewer_iiif_max_size'), null); ?>
            <p class="explanation">
                <?php echo __('Set the maximum size in bytes for the dynamic processing of images.'); ?>
                <?php echo __('Beyond this limit, the plugin will require a tiled image, for example made with the plugin OpenLayers Zoom.'); ?>
                <?php echo __('Let empty to allow processing of any image.'); ?>
            </p>
        </div>
    </div>
</fieldset>
<fieldset id="fieldset-universalviewer-various"><legend><?php echo __('Various parameters'); ?></legend>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_force_https',
                __('Force https')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formCheckbox('universalviewer_force_https', true,
                array('checked' => (boolean) get_option('universalviewer_force_https'))); ?>
            <p class="explanation">
                <?php echo __('In some cases, the json files (manifest and info) on a secured site (https) contains some urls with the scheme "http".'); ?>
                <?php echo __('This option forces all Omeka absolute urls in these files to start with the scheme "https".'); ?>
                <?php echo __('Of course, this should be unchecked on a http-only site.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_force_strict_json',
                __('Force standard json')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formCheckbox('universalviewer_force_strict_json', true,
                array('checked' => (boolean) get_option('universalviewer_force_strict_json'))); ?>
            <p class="explanation">
                <?php echo __('With some servers, the json files (manifest and info) are badly formatted.'); ?>
                <?php echo __('This option forces Omeka to follow strictly the json standard.'); ?>
            </p>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('universalviewer_manifest_ldn_service', __('LDN Service URL')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formText('universalviewer_manifest_ldn_service', get_option('universalviewer_manifest_ldn_service'), null); ?>
            <p class="explanation">
                <?php echo __('Add to the IIIF manifests a link to a known Linked Data Notifications Inbox from which you may retrieve supplemental contents (e.g. tables of contents, transcriptions, translations, or other kinds of annotations).'); ?>
            </p>
        </div>
    </div>
</fieldset>
