<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/itilobject/actors/field.html.twig */
class __TwigTemplate_d2f82558222d027e77a4477b5f073fe5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["rand"] = twig_random($this->env);
        // line 35
        echo "
";
        // line 36
        $context["actors"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [($context["actortypeint"] ?? null), ($context["params"] ?? null)], "method", false, false, false, 36);
        // line 37
        echo "
";
        // line 38
        $context["required"] = false;
        // line 39
        if (((twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 39) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 39)) || ((($context["actortype"] ?? null) == "assign") && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_suppliers_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 39)))) {
            // line 40
            echo "   ";
            $context["required"] = true;
        }
        // line 42
        echo "
";
        // line 43
        $context["is_actor_hidden"] = false;
        // line 44
        if (((twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 44) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 44)) && ((($context["actortype"] ?? null) != "assign") || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_suppliers_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 44)))) {
            // line 45
            echo "   ";
            $context["is_actor_hidden"] = true;
        }
        // line 47
        echo "
";
        // line 48
        $context["onchange"] = "";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 49) && (($context["actortype"] ?? null) == "requester"))) {
            // line 50
            echo "   ";
            $context["onchange"] = "this.form.submit();";
        }
        // line 52
        echo "
";
        // line 53
        if ( !($context["is_actor_hidden"] ?? null)) {
            // line 54
            echo "   <select class=\"form-select\" multiple=\"true\" id=\"actor_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" data-actor-type=\"";
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\"
        ";
            // line 55
            echo ((($context["required"] ?? null)) ? ("required") : (""));
            echo ">
   ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 57
                echo "      ";
                $context["unique_id"] = ((("user_opt_" . ($context["actortype"] ?? null)) . twig_get_attribute($this->env, $this->source, $context["actor"], "itemtype", [], "any", false, false, false, 57)) . twig_get_attribute($this->env, $this->source, $context["actor"], "items_id", [], "any", false, false, false, 57));
                // line 58
                echo "      <option selected=\"true\" value=\"";
                echo twig_escape_filter($this->env, (((($__internal_compile_0 = $context["actor"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null) . "_") . (($__internal_compile_1 = $context["actor"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null)), "html", null, true);
                echo "\"
            data-itemtype=\"";
                // line 59
                echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["actor"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["itemtype"] ?? null) : null), "html", null, true);
                echo "\" data-items-id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["items_id"] ?? null) : null), "html", null, true);
                echo "\"
            data-use-notification=\"";
                // line 60
                echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["actor"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["use_notification"] ?? null) : null), "html", null, true);
                echo "\"
            data-default-email=\"";
                // line 61
                (((twig_get_attribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 61) &&  !(null === (($__internal_compile_5 = $context["actor"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["default_email"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_6 = $context["actor"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["default_email"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\"
            data-alternative-email=\"";
                // line 62
                (((twig_get_attribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 62) &&  !(null === (($__internal_compile_7 = $context["actor"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["alternative_email"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_8 = $context["actor"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["alternative_email"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\"
            ";
                // line 63
                if (((((($__internal_compile_9 = $context["actor"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["itemtype"] ?? null) : null) == "User") && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 63)) || (((($__internal_compile_10 = $context["actor"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["itemtype"] ?? null) : null) == "Group") && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 63)))) {
                    // line 64
                    echo "               disabled=\"disabled\" style=\"display: none;\"
            ";
                }
                // line 66
                echo "            data-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_11 = $context["actor"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["text"] ?? null) : null)), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_12 = $context["actor"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["title"] ?? null) : null)), "html", null, true);
                echo "\" data-glpi-popover-source=\"content";
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\">
         ";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_13 = $context["actor"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["title"] ?? null) : null)), "html", null, true);
                echo "
      </option>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "   </select>

   ";
            // line 72
            if ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 72) &&  !(($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["template_preview"] ?? null) : null)) && ($context["canassigntome"] ?? null))) {
                // line 73
                echo "      ";
                echo twig_include($this->env, $context, "components/itilobject/actors/assign_to_me.html.twig");
                echo "
   ";
            }
            // line 75
            echo "
   <script type=\"text/javascript\">

   // Do not use jquery ready wrapper here as it behave unexpectedly with ajax
   // requests, adding an unnecessary delay
   (function() {
      var actorytype = '";
            // line 81
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "';

      // function to display an option in the list or the selected input
      var genericTemplate_";
            // line 84
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " = function(option = {}, is_selection = false) {
         var element   = \$(option.element);
         var itemtype  = element.data('itemtype') ?? option.itemtype;
         var items_id  = element.data('items-id') ?? option.items_id;
         var text      = escapeMarkupText(element.data('text') ?? option.text ?? '');
         var title     = escapeMarkupText(element.data('title') ?? option.title ?? '');
         var use_notif = element.data('use-notification') ?? option.use_notification ?? 1;
         var alt_email = element.data('alternative-email') ?? option.alternative_email ?? '';

         var icon = \"\";
         var fk   = \"\";
         switch (itemtype) {
            case \"User\":
               if (items_id == 0) {
                  text = alt_email;
                  icon = `<i class=\"ti  fa-fw ti-mail mx-1\" title=\"";
            // line 99
            echo twig_escape_filter($this->env, __("Direct email"), "html", null, true);
            echo "\"></i>`;
               } else {
                  icon = `<i class=\"ti  fa-fw ti-user mx-1\" title=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "\"></i>`;
               }
               if (\"";
            // line 103
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
                  fk = \"users_id_assign\";
               } else if (\"";
            // line 105
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
                  fk = \"users_id_requester\";
               } else if (\"";
            // line 107
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"observer\") {
                  fk = \"users_id_observer\";
               }
               break;
            case \"Group\":
               icon = `<i class=\"ti  fa-fw ti-users mx-1\" title=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            echo "\"></i>`;
               if (\"";
            // line 113
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
                  fk = \"groups_id_assign\";
               } else if (\"";
            // line 115
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
                  fk = \"groups_id_requester\";
               } else if (\"";
            // line 117
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"observer\") {
                  fk = \"groups_id_observer\";
               }
               break;
            case \"Supplier\":
               icon = `<i class=\"ti fa-fw ti-package mx-1\" title=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Supplier"), "html", null, true);
            echo "\"></i>`;
               fk   = \"suppliers_id_assign\";
               break;
         }

         var actions = \"\";
         ";
            // line 128
            if (($context["canupdate"] ?? null)) {
                // line 129
                echo "         if (['User', 'Supplier', 'Email'].includes(itemtype)
            && is_selection) {
            var fa_class = \"far\";
            if (use_notif) {
               fa_class = \"fas\";
            }
            actions = `<button class=\"btn btn-sm btn-ghost-secondary edit-notify-user\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 137
                echo twig_escape_filter($this->env, __("Email followup"), "html", null, true);
                echo "\"
                              type=\"button\">
               <i class=\"\${fa_class} fa-bell notify-icon\"></i>
            </button>`;
         }
         ";
            }
            // line 143
            echo "
         // manage specific display for tree data (like groups)
         var indent = \"\";
         if (!is_selection && \"level\" in option && option.level > 1) {
            for (let index = 1; index < option.level; index++) {
               indent = \"&nbsp;&nbsp;&nbsp;\"+indent;
            }
            indent = indent+\"&raquo;\";
         }

         // prepare html for option element
         var text = (is_selection && itemtype == \"Group\") ? title : text;
         var option_text    = `<span class=\"actor_text\">\${text}</span>`;
         var option_element = \$(`<span class=\"actor_entry\" data-itemtype=\"\${itemtype}\" data-items-id=\"\${items_id}\" data-actortype=\"\${actorytype}\">\${indent}\${icon}\${option_text}\${actions}</span>`);

          if (is_selection && itemtype == \"User\") {
              const unique_id = \"user_opt_\" + actor_select.attr('data-actor-type') + \"User\" + items_id;
              \$.ajax({
                  url: '";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/comments.php"), "html", null, true);
            echo "',
                  type: 'POST',
                  data: {
                      'itemtype': 'User',
                      'value': items_id,
                  }
              }).then((result) => {
                  if (result) {
                      actor_select.parent().append('<' + `div id=\"content\${unique_id}\" style=\"display: none;\">` + result + '<' + '/div>');
                      option_element.attr('data-glpi-popover-source', `content\${unique_id}`);
                  }
              });
          }

         // manage ticket information (number of assigned ticket for an actor)
         if (is_selection && itemtype != \"Email\") {
            var label = '';
            if (\"";
            // line 178
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
               label = \"";
            // line 179
            echo twig_escape_filter($this->env, __("Number of tickets already assigned"), "html", null, true);
            echo "\";
            } else if (\"";
            // line 180
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
               label = \"";
            // line 181
            echo twig_escape_filter($this->env, __("Number of tickets as requester"), "html", null, true);
            echo "\";
            }
            var existing_element = \$(
               `<span class=\"assign_infos ms-1\" title=\"\${label}\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                     data-id=\"\${items_id}\" data-fk=\"\${fk}\">
                  <i class=\"fas fa-spinner fa-spin\"></i>
               </span>`
            );
            option_element.append(existing_element);

            \$.get(\"";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/actorinformation.php"), "html", null, true);
            echo "\", {
               [fk]: items_id,
               only_number: true,
            }).done(function (number) {
               var badge = \"\";
               if (number.length > 0) {
                  badge = `<span class=\"badge bg-secondary-lt\">
                  \${number}
               </span>`;
               }
               existing_element.html(badge);
            });
         }

         return option_element;
      };

      var select2_width = \"";
            // line 209
            echo ((($context["canassigntome"] ?? null)) ? ("calc(100% - 30px)") : ("100%"));
            echo "\";

      const actor_select = \$(\"#actor_";
            // line 211
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\");
      actor_select.select2({
         tags: true,
         width: select2_width,
         tokenSeparators: [',', ' '],
         disabled: false, // TODO can edit
         containerCssClass: 'actor-field',
         templateSelection: function(option) { return genericTemplate_";
            // line 218
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(option, true); },
         templateResult:    function(option) { return genericTemplate_";
            // line 219
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(option, false); },
         disabled: ";
            // line 220
            echo ((($context["canupdate"] ?? null)) ? ("false") : ("true"));
            echo ",
         createTag: function (params) {
            var term = \$.trim(params.term);

            if (term === '') {
               return null;
            }

            // Don't offset to create a tag if it's not an email
            if (!new RegExp(/^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,63}\$/).test(term)) {
               // Return null to disable tag creation
               return null;
            }

            return {
               id: term,
               text: term,
               itemtype: \"User\",
               items_id: 0,
               use_notification: 1,
               alternative_email: term,
            }
         },
         ajax: {
            url: '";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/actors.php"), "html", null, true);
            echo "',
            datatype: 'json',
            type: 'POST',
            delay:250,
            data: function (params) {
               var is_new_item = ";
            // line 249
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 249)) ? ("true") : ("false"));
            echo ";
               return {
                  action: 'getActors',
                  actortype: actorytype,
                  users_right: '";
            // line 253
            (((array_key_exists("users_right", $context) &&  !(null === ($context["users_right"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["users_right"] ?? null), "html", null, true))) : (print ("all")));
            echo "',
                  entity_restrict: (actors.requester.length == 0 && is_new_item) ? -1 : ";
            // line 254
            echo twig_escape_filter($this->env, ($context["entities_id"] ?? null), "html", null, true);
            echo ",
                  searchText: params.term,
                  _idor_token: '";
            // line 256
            echo twig_escape_filter($this->env, Session::getNewIDORToken(), "html", null, true);
            echo "',
                  itiltemplate_class: '";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "getType", [], "method", false, false, false, 257), "html", null, true);
            echo "',
                  itiltemplates_id: ";
            // line 258
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 258), "id", [], "array", true, true, false, 258) &&  !(null === (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 258)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 258)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), "html", null, true))) : (print (0)));
            echo ",
                  itemtype: '";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 259), "html", null, true);
            echo "',
                  items_id: ";
            // line 260
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 260)) ? ( -1) : ((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 260)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null))), "html", null, true);
            echo ",
                  item: ";
            // line 261
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 261));
            echo ",
                  returned_itemtypes: ";
            // line 262
            echo json_encode((($context["returned_itemtypes"]) ?? (["User", "Group", "Supplier"])));
            echo ",
                  page: params.page || 1
               };
            },
         }
      }).on('select2:open', () => {
          // Close popovers
          \$('.popover').popover('hide');
      });

       actor_select.parent().popover({
           selector: '[data-glpi-popover-source]',
           container: actor_select.parent(),
           html: true,
           sanitize: false,
           trigger: 'hover',
           delay: {
               hide: 300
           },
           template: '<' + 'div class=\"popover shadow\" role=\"tooltip\"><' + 'div class=\"popover-arrow\"><' + '/div><' + 'h3 class=\"popover-header\"><' + '/h3><' + 'div class=\"popover-body\"><' + '/div><' + '/div>',
           content: function() {
               // Close other popovers
               \$('.popover').popover('hide');
               return \$('#' + \$(this).attr('data-glpi-popover-source')).html();
           }
       }).on('hide.bs.popover', function () {
            // prevent closing popover when user card is hover
            if (\$('.user-info-card:hover').length > 0) {
                return false;
            }
        });

        // when the mouse leave the user card in the popover, close it
        \$(document).on('mouseleave', '.user-info-card', function() {
            setTimeout(() => {
                \$('.popover').popover('hide');
            }, 300);
        });

      // manage actors change
      var updateActors";
            // line 302
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " = function() {
         var data = \$(\"#actor_";
            // line 303
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").select2('data');

         var new_actors = [];
         data.forEach(function(selection) {
            var element = \$(selection.element);

            var itemtype  = selection.itemtype ?? element.data('itemtype');
            var items_id  = selection.items_id ?? element.data('items-id');
            var use_notif = selection.use_notification  ?? element.data('use-notification')  ?? false;
            var def_email = selection.default_email ?? element.data('default-email') ?? '';
            var alt_email = selection.alternative_email ?? element.data('alternative-email') ?? '';

            if (itemtype == \"Email\") {
               itemtype  = \"User\";
               use_notif = true;
               alt_email = selection.id;
            }

            new_actors.push({
               itemtype: itemtype,
               items_id: items_id,
               use_notification: use_notif,
               default_email: def_email,
               alternative_email: alt_email,
            });
         });

         actors[actorytype] = new_actors;

         saveActorsToDom();
      };
      \$(\"#actor_";
            // line 334
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").on('select2:select', function () {
         updateActors";
            // line 335
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "();
         ";
            // line 336
            echo twig_escape_filter($this->env, ($context["onchange"] ?? null), "html", null, true);
            echo "
      });
      \$(\"#actor_";
            // line 338
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").on('select2:unselect', function () {
         updateActors";
            // line 339
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "();
         ";
            // line 340
            echo twig_escape_filter($this->env, ($context["onchange"] ?? null), "html", null, true);
            echo "
      });

      // intercept event for edit notification button
      document.addEventListener('click', event => {
         if (event.target.closest(\"#actor_";
            // line 345
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .edit-notify-user\")) {
            return openNotifyModal(event);
         }
         // if a click on assign info is detected prevent opening of select2
         if (event.target.closest(\"#actor_";
            // line 349
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .assign_infos\")) {
            event.stopPropagation();
         }
      }, {capture: true})
      document.addEventListener('keydown', event => {
         if (event.target.closest(\"#actor_";
            // line 354
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .edit-notify-user\")
            && event.key == \"Enter\") {
            return openNotifyModal(event);
         }
      }, {capture: true})

      ";
            // line 360
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 360)) {
                // line 361
                echo "         \$(\".actor_entry[data-itemtype=\\\"User\\\"][data-actortype=\\\"";
                echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
                echo "\\\"]\").parent().css(\"display\", \"none\");
      ";
            }
            // line 363
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 363)) {
                // line 364
                echo "         \$(\".actor_entry[data-itemtype=\\\"Group\\\"][data-actortype=\\\"";
                echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
                echo "\\\"]\").parent().css(\"display\", \"none\");
      ";
            }
            // line 366
            echo "   })();
   </script>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/actors/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 366,  603 => 364,  600 => 363,  594 => 361,  592 => 360,  583 => 354,  575 => 349,  568 => 345,  560 => 340,  556 => 339,  552 => 338,  547 => 336,  543 => 335,  539 => 334,  505 => 303,  501 => 302,  458 => 262,  454 => 261,  450 => 260,  446 => 259,  442 => 258,  438 => 257,  434 => 256,  429 => 254,  425 => 253,  418 => 249,  410 => 244,  383 => 220,  379 => 219,  375 => 218,  365 => 211,  360 => 209,  340 => 192,  326 => 181,  322 => 180,  318 => 179,  314 => 178,  294 => 161,  274 => 143,  265 => 137,  255 => 129,  253 => 128,  244 => 122,  236 => 117,  231 => 115,  226 => 113,  222 => 112,  214 => 107,  209 => 105,  204 => 103,  199 => 101,  194 => 99,  176 => 84,  170 => 81,  162 => 75,  156 => 73,  154 => 72,  150 => 70,  141 => 67,  132 => 66,  128 => 64,  126 => 63,  122 => 62,  118 => 61,  114 => 60,  108 => 59,  103 => 58,  100 => 57,  96 => 56,  92 => 55,  85 => 54,  83 => 53,  80 => 52,  76 => 50,  74 => 49,  72 => 48,  69 => 47,  65 => 45,  63 => 44,  61 => 43,  58 => 42,  54 => 40,  52 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/field.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\actors\\field.html.twig");
    }
}
