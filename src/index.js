const {registerBlockType} = wp.blocks;

// every new built in gutenburg/wordpress variable must be defined right here to call onto the wordpress API. this is seen at the end of the brackets when everything is equal to wp.components 
const {
    RichText,
    InspectorControls,
    ColorPalette,
    MediaUpload
    } = wp.blockEditor;

const { PanelBody, Button, RangeControl } = wp.components;

registerBlockType('customblock/my-custom-block', {

    //built-in attributes -> this is where you will define the name and description of your new Gutenburg block. 
    
    title: 'Call To Action',
    description: 'Block to generate a call to Action',
    icon: 'format-image',
    category: 'layout',
    
    
    //custom attributes -> This is the area where you can define all of your custom attributes and how the will read on the wordpress side. start with the type and so on
    
    attributes: {

        title: {
            type: 'string',
            source: 'html',
            selector: 'h2'
        },

        titleColor: {

            type: 'string',
            default: 'black'
        },

        bodyColor: {
            type: 'string',
            default: 'black'
        },

        body: {
            type: 'string',
            source: 'html',
            selector: 'p'
        },

        backgroundImage: {
            type : 'string',
            default: null
        },

        overlayColor: {
            type: 'string',
            default: 'black'
        },

        overlayOpacity: {
            type: 'number',
            default: 0.3
        }

    },

   // This is the area to define new attribute variables. you must define them here in order to call them again on the page 
    edit({ attributes, setAttributes }) {

        const {
            title,
            body,
            titleColor,
            bodyColor,
            backgroundImage,
            overlayColor,
            overlayOpacity

        } = attributes;

    //custom functions -> here is where you will set every new function. Each variable you us should have a specified function in this area or it will not work
    
    function onChangeTitle(newTitle) {
        setAttributes({ title: newTitle });
        }

    function onChangeBody(newBody) {
        setAttributes({ body: newBody });
         }

    function onTitleColorChange(newColor) {
        setAttributes({ titleColor: newColor });
         }

    function onBodyColorChange(newColor) {
        setAttributes({ bodyColor: newColor });
         }

    function onSelectImage(newImage) {
        setAttributes( {backgroundImage: newImage.sizes.full.url} );
    }

    function onOverlayColorChange(newColor) {
        setAttributes( { overlayColor: newColor });
    }

    function onOverlayOpacityChange(newOpacity) {
        setAttributes( { overlayOpacity: newOpacity });
    }
    
    // This is the return section or otherwise known as the area that your Gutenburg block will be read on the wordpress settings sidebar. you must define each new attribute under the inspectorControls tag so that they will appear in the settings section for your block
       return ([

        <InspectorControls style = { { marginBottom: '40px' } }>

            <PanelBody title = { 'Font Color Settings' }>

                <p><strong>Select a Title Color:</strong></p>
                <ColorPalette value = { titleColor }
                              onChange = { onTitleColorChange }/>

                <p><strong>Select a Body Color</strong></p>
                <ColorPalette value = { bodyColor }
                              onChange = { onBodyColorChange }/>              
            </PanelBody>
           
            <PanelBody title= { 'Background Image Settings'}>
            
                <p><strong>Select a Background Image:</strong></p>
                
                <MediaUpload 
                    onSelect= {onSelectImage}
                    type = 'image'
                    value = {backgroundImage}
                    render = { ( { open } ) =>  (
                        <Button
                            className = "editor-media-placeholder__button is-button is-default is-large"
                            icon = "upload"
                            onClick = {open}>
                            Background Image
                        </Button>
                     ) }/>
            
            <div style = {{ marginTop:'20px', marginBottom: '40px' }}>
                <p><strong>Overlay Color:</strong></p>
                <ColorPalette value = { overlayColor }
                              onChange = { onOverlayColorChange }/>

            </div>

            <RangeControl 
                label = { 'Overlay Opacity' }
                value = { overlayOpacity }
                onChange = { onOverlayOpacityChange }
                min = { 0 }
                max = { 1 }
                step = { 0.05 }
            />

            </PanelBody>

        </InspectorControls>,

        <div className = "container" style = {{
            backgroundImage: `url(${backgroundImage})`,
            backgroundSize : 'cover',
            backgroundPosition: 'center',
            backgroundRepeat: 'no-repeat'  
        }}>

            <div class = "container_overlay" style = {{ background:overlayColor, opacity: overlayOpacity }}></div>

            <RichText key = "editable"
                      tagName = "h2"
                      placeholder = "Your Title"
                      value = { attributes.title }
                      onChange = { onChangeTitle }
                      style = { {color: titleColor} }/>

            <RichText key = "editable"
                      tagName = "p"
                      placeholder = "Your Description"
                      value = { attributes.body }
                      onChange = {onChangeBody}
                      style = { {color: bodyColor} }/>
        </div>
       ]);
        
    },
    
   // This is the area that stores all the information once you update and refresh. If you do not specify the same information stated in the return section, your code will not be stored upon refresh. 
    save({ attributes }) {
    
        const {
            title,
            body,
            titleColor,
            bodyColor,
            backgroundImage,
            overlayColor,
            overlayOpacity
        } = attributes;

        return (
            <div className = "container" style = {{
                backgroundImage:`url(${backgroundImage})`,
                backgroundSize : 'cover',
                backgroundPosition: 'center',
                backgroundRepeat: 'no-repeat'  
            }}>

            <div class = "container_overlay" style = {{ background:overlayColor, opacity: overlayOpacity }}></div>


                <h2 style = { {color: titleColor} }> {title} </h2>
                <RichText.Content style = { {color: bodyColor} } tagName = "p"
                                  value = {body} />
            </div>
        );
    }
});
