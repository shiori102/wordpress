const { even } = require("prelude-ls")

//
wp.blocks.registerBlockType('ourplugin/pluginName', {
    title: "Name of Plugin",
    icon: 'smiley',
    category: 'common',
    attributes: {
        //required properties is type, source and selector are not required
        //selector refers to the className we created in the span for the JSX
        skyColor: {type:"string", source="text", selector: ".skyColor"}, 
        grassColor: {type:"string", source="text", selector: ".grassColor"}
    },
    //what you see in the admin post editor function
    edit: function(props){
        //creating html element in js
        //takes 3 arguments
        //1 - type of html element you want to create
        //2 - attributes that describe element (ex: class)
        //3 - content of the element
       //return wp.element.createElement('h3', 'null', 'hello from admin editor')
       
       
       //using JSX to render html through node.js
       //to use JSX in the command line terminal type "npm run start"
       //specify event in function as argument (can be called e)
       function updateSkyColor(event){
           //taking the input from the user as event.target.value
           //setAttributes is a wp function
            props.setAttributes({skyColor: event.target.value})
       }

       function updateGrassColor(event){
           props.setAttributes({grassColor: event.target.value})
       }
       
       //here we specify the changes the user makes with the onchange attribute
       return (
           <div>
               <input type="text" placeholder="sky color" value={props.attributes.skyColor} onChange={updateSkyColor}/>
               <input type="text" placeholder="grass color" value={props.attributes.grassColor} onChange={updateGrassColor}/>
           </div>
       )
    },
    //what the public will see
    //added a span className to target the color
    save: function(props){

        <p>Today the sky is <span className="grassColor">{props.attributes.skyColor}</span> and the grass is <span className="grassColor"> {props.attributes.grassColor}.</span></p>
    //    return wp.element.createElement('h3', 'null', 'this is the frontend')
    },

    //we add a top level value of deprecated and added the save function in the array
    //also added the attributes
    deprecated: [{
        attributes: {
            //required properties is type, source and selector are not required
            //selector refers to the className we created in the span for the JSX
            skyColor: {type:"string", source="text", selector: ".skyColor"}, 
            grassColor: {type:"string", source="text", selector: ".grassColor"}
        },
        save: function(props){

            <p>Today the sky is <span className="grassColor">{props.attributes.skyColor}</span> and the grass is <span className="grassColor"> {props.attributes.grassColor}.</span></p>
        //    return wp.element.createElement('h3', 'null', 'this is the frontend')
        }
    }]
   }),

   function(){
return;
   }