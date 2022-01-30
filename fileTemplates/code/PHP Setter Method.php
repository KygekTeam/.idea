public ${STATIC} function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #end$${PARAM_NAME}) : static
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end
return $this;
}
