
#HAPEL Parameter Reference

The following table references all variable names and types used when creating an html node.

###Common Parameters
These parameters are common to the majority of HAPEL methods.

Parameter                               | Valid Types               | Required  | Default   | Use                                                        
----------------------------------------|---------------------------|-----------|-----------|---------------------------------------------------
[$child](attributes/child.md)           | null/bool/string          | yes       | true      | The child content for the element.    
[$class](attributes/class.md)           | null/array/string         | no        | null      | The class(es) for the element.                      
[$id](attributes/id.md)                 | null/string               | no        | null      | The id for the element.                              
[$style](attributes/style.md)           | null/array/string         | no        | null      | The style(s) for the element.                        
[$data](attributes/data.md)             | null/array                | no        | null      | The data attribute(s) for the element.                 
[$attr](attributes/attr.md)             | null/array/string         | no        | null      | Any additional attributes for the element.

###Special Case Parameters
These parameters are only used on specific HAPEL methods.

Parameter                               | Valid Types               | Required  | Default   | Use
----------------------------------------|---------------------------|-----------|-----------|---------------------------------------------------
[$action](attributes/action.md)         | null/string               | no        | null      |
[$alt](attributes/alt.md)               | null/string               | no        | null      | Sets the alt attribute.
[$caption](attributes/caption.md)       | null/string               | no        | null      |
[$content](attributes/content.md)       | string                    | yes       |           | The content attribute.
[$href](attributes/href.md)             | null/string               | no        |           |
[$lang](attributes/lang.md)             | null/string               | yes       | 'en'      | The language attribute.
[$method](attributes/method.md)         | null/string               | no        | null      |    
[$name](attributes/name.md)             | string                    | yes       |           | The name attribute.
[$rel](attributes/rel.md)               | null/string               | no        | null      |
[$required](attributes/required.md)     | bool                      | no        | false     |
[$src](attributes/src.md)               | null/string               | no        |           |
[$srcset](attributes/srcset.md)         | array                     | yes       |           |
[$title](attributes/title.md)           | null/string               | no        | null      | Sets the title attribute.
[$type](attributes/type.md)             | null/string               | no        | (!) varies| Sets the type attribute.
[$value](attributes/value.md)           | null/string               | no        | null

(!) Varies based on method. Check method documentation for default value.