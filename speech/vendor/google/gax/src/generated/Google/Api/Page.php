<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/documentation.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a documentation page. A page can contain subpages to represent
 * nested documentation set structure.
 *
 * Protobuf type <code>Google\Api\Page</code>
 */
class Page extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the page. It will be used as an identity of the page to
     * generate URI of the page, text of the link to this page in navigation,
     * etc. The full page name (start from the root page name to this page
     * concatenated with `.`) can be used as reference to the page in your
     * documentation. For example:
     * <pre><code>pages:
     * - name: Tutorial
     *   content: &#40;== include tutorial.md ==&#41;
     *   subpages:
     *   - name: Java
     *     content: &#40;== include tutorial_java.md ==&#41;
     * </code></pre>
     * You can reference `Java` page using Markdown reference link syntax:
     * `[Java][Tutorial.Java]`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The Markdown content of the page. You can use <code>&#40;== include {path} ==&#41;</code>
     * to include content from a Markdown file.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     */
    private $content = '';
    /**
     * Subpages of this page. The order of subpages specified here will be
     * honored in the generated docset.
     *
     * Generated from protobuf field <code>repeated .google.api.Page subpages = 3;</code>
     */
    private $subpages;

    public function __construct() {
        \GPBMetadata\Google\Api\Documentation::initOnce();
        parent::__construct();
    }

    /**
     * The name of the page. It will be used as an identity of the page to
     * generate URI of the page, text of the link to this page in navigation,
     * etc. The full page name (start from the root page name to this page
     * concatenated with `.`) can be used as reference to the page in your
     * documentation. For example:
     * <pre><code>pages:
     * - name: Tutorial
     *   content: &#40;== include tutorial.md ==&#41;
     *   subpages:
     *   - name: Java
     *     content: &#40;== include tutorial_java.md ==&#41;
     * </code></pre>
     * You can reference `Java` page using Markdown reference link syntax:
     * `[Java][Tutorial.Java]`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the page. It will be used as an identity of the page to
     * generate URI of the page, text of the link to this page in navigation,
     * etc. The full page name (start from the root page name to this page
     * concatenated with `.`) can be used as reference to the page in your
     * documentation. For example:
     * <pre><code>pages:
     * - name: Tutorial
     *   content: &#40;== include tutorial.md ==&#41;
     *   subpages:
     *   - name: Java
     *     content: &#40;== include tutorial_java.md ==&#41;
     * </code></pre>
     * You can reference `Java` page using Markdown reference link syntax:
     * `[Java][Tutorial.Java]`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * The Markdown content of the page. You can use <code>&#40;== include {path} ==&#41;</code>
     * to include content from a Markdown file.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The Markdown content of the page. You can use <code>&#40;== include {path} ==&#41;</code>
     * to include content from a Markdown file.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @param string $var
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;
    }

    /**
     * Subpages of this page. The order of subpages specified here will be
     * honored in the generated docset.
     *
     * Generated from protobuf field <code>repeated .google.api.Page subpages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubpages()
    {
        return $this->subpages;
    }

    /**
     * Subpages of this page. The order of subpages specified here will be
     * honored in the generated docset.
     *
     * Generated from protobuf field <code>repeated .google.api.Page subpages = 3;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setSubpages(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Page::class);
        $this->subpages = $arr;
    }

}

