<template>

    <div class="uk-form-horizontal">

        <div class="uk-form-row">
            <label for="form-page_class" class="uk-form-label">Top {{ 'Position' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-top-style" class="uk-form-width-large" v-model="node.theme.top_style">
                    <option value="uk-block-default">{{ 'Default' | trans }}</option>
                    <option value="uk-block-muted">{{ 'Muted' | trans }}</option>
                </select>
            </div>
        </div>


        <div class="uk-form-row">
            <label for="form-page_class" class="uk-form-label">{{ 'Page class' | trans }}</label>
            <div class="uk-form-controls">

                <input id="form-page_class" class="uk-form-width-large" type="text" placeholder="" v-model="node.theme.page_class">
            </div>
        </div>

    </div>

</template>

<script>

    module.exports = {

        section: {
            label: 'Theme',
            priority: 90
        },

        props: ['node']

    };

    window.Site.components['node-theme'] = module.exports;

</script>