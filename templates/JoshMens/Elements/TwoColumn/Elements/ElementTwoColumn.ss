<% if $Title && $ShowTitle %><h2 class="element__title">$Title</h2><% end_if %>

<% if $ColOne || $ColTwo %>
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <% if $ColOne %>$ColOne<% end_if %>
        </div>
        <div class="col-sm-6 col-xs-12">
            <% if $ColTwo %>$ColTwo<% end_if %>
        </div>
    </div>
<% end_if %>