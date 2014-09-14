<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="text" encoding="UTF-8" media-type="text/plain"/>

    <!--
    XSLT stylesheet responsible for transforming a valid b3.xml file to a b3.ini file.
    -->

    <!-- override the default xsl behavior which copies text nodes -->
    <xsl:template match="text()"/>

    <!-- xml comments handling -->
    <xsl:template match="comment()">
        <xsl:call-template name="make_ini_style_comment"/>
    </xsl:template>

    <!-- 'settings' elements handling -->
    <xsl:template match="/configuration/settings">
        <xsl:call-template name="make_ini_style_section_from_settings"/>
        <xsl:apply-templates/>
    </xsl:template>

    <!-- 'set' elements handling -->
    <xsl:template match="/configuration/settings/set">
        <xsl:call-template name="make_ini_style_entry_from_set"/>
    </xsl:template>

    <!-- 'plugins' elements handling -->
    <xsl:template match="/configuration/plugins">
        <xsl:text>&#xa;&#xa;[plugins]&#xA;</xsl:text>
        <xsl:apply-templates />
        <!-- add [plugins_custom_path] if some of the plugins have custom path -->
        <xsl:if test="count(/configuration/plugins/plugin[@path]) &gt; 0">
            <xsl:text>&#xa;&#xa;[plugins_custom_path]&#xa;</xsl:text>
            <xsl:for-each select="/configuration/plugins/plugin[@path]">
                <xsl:value-of select="@name"/>
                <xsl:text>: </xsl:text>
                <xsl:value-of select="@path"/>
                <xsl:text>&#xa;</xsl:text>
            </xsl:for-each>
            <xsl:text>&#xa;</xsl:text>
        </xsl:if>
    </xsl:template>

    <!-- 'plugins/plugin' elements handling -->
    <xsl:template match="/configuration/plugins/plugin">
        <xsl:value-of select="@name"/>
        <xsl:text>: </xsl:text>
        <xsl:value-of select="@config"/>
        <xsl:text>&#xa;</xsl:text>
    </xsl:template>

    <!-- special cases for the [b3] section -->
    <xsl:template match="/configuration/settings[@name='b3']">
        <xsl:call-template name="make_ini_style_section_from_settings"/>
        <xsl:apply-templates/>

        <!-- add the 'disabled_plugins' entry -->
        <xsl:text>&#xa;# List of plugins that will be loaded in 'disabled' status.
# Example: if you want b3 to load the 'stats' and 'pingwatch' plugin but not
# to start them at b3 main run, the following line should be:
#       disabled_plugins: stats pingwatch
disabled_plugins: </xsl:text>
        <xsl:for-each select="/configuration/plugins/plugin[@disabled]">
            <xsl:variable name="lowercased_disabled" select="translate(@disabled,'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz')"/>
            <xsl:if test="$lowercased_disabled='yes' or $lowercased_disabled='on' or $lowercased_disabled='1'">
                <xsl:value-of select="@name"/>
                <xsl:text> </xsl:text>
            </xsl:if>
        </xsl:for-each>
        <xsl:text>&#xa;</xsl:text>

        <!-- add the 'external_plugins_dir' entry -->
        <xsl:text>&#xa;# The directory where additional plugins can be found
external_plugins_dir: </xsl:text>
        <xsl:value-of select="/configuration/settings[@name='plugins']/set[@name='external_dir']/text()"/>
    </xsl:template>

    <!-- special case for the 'plugins' xml section -->
    <xsl:template match="/configuration/settings[@name='plugins']">
        <!-- ignore all content -->
    </xsl:template>

    <!--====================================================================================================-->

    <!-- transform a 'settings' element into a .ini style [section] -->
    <xsl:template name="make_ini_style_section_from_settings">
        <xsl:text>&#xa;&#xa;[</xsl:text>
        <xsl:value-of select="@name"/>
        <xsl:text>]&#xA;</xsl:text>
    </xsl:template>

    <!-- transform a 'set' element into a .ini style entries -->
    <xsl:template name="make_ini_style_entry_from_set">
        <xsl:value-of select="@name"/>
        <xsl:text>: </xsl:text>
        <xsl:value-of select="text()"/>
        <xsl:text>&#xA;</xsl:text>
    </xsl:template>

    <!-- transform current text node to a ini style comment: each new line is prepended with # -->
    <xsl:template name="make_ini_style_comment">
        <xsl:param name="text" select="string(.)"/>
        <xsl:choose>
            <xsl:when test="contains($text, '&#xa;')">
                <xsl:text>&#xa;# </xsl:text>
                <xsl:value-of select="substring-before($text, '&#xa;')"/>
                <xsl:call-template name="make_ini_style_comment">
                    <xsl:with-param name="text" select="substring-after($text, '&#xa;')" />
                </xsl:call-template>
            </xsl:when>
            <xsl:otherwise>
                <xsl:text>&#xa;# </xsl:text>
                <xsl:value-of select="$text"/>
                <xsl:text>&#xa;</xsl:text>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

</xsl:stylesheet>