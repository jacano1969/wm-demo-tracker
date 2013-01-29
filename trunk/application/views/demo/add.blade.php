<div class="row">
    <div class="span12">
        <h3>Add a Demo</h3>
    </div>
</div>
<div class="row">
    <div class="span4">
        <label for="name">Name</label>
        <input type="text" ng-model="studentName" ng-required="true" id="name" placeholder="Enter full name"
               class="span4">
    </div>
    <div class="span4"><label for="name">Mobile</label>
        <input type="text" ng-model="mobile" ng-required="true" ng-maxLength="10" id="mobile" class="span4"></div>
    <div class="span4">
        <label for="branch">Branch</label>
        <select ng-model="branchId" id="branch" ng-required="true" class="span4">
            @foreach ($branches as $branch)
            <option value="<% $branch->id %>"><% $branch->name %></option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="span4">
        <label for="demoDate">Demo Date</label>

        <div class="input-append date datetime-input" data-date-format="dd M yyyy hh:ii">
            <input size="16" type="text" id="demoDate" ng-model="demoDate" value="" readonly>
            <span class="add-on"><i class="icon-remove"></i></span>
            <span class="add-on"><i class="icon-calendar"></i></span>
        </div>

    </div>
    <div class="span4">
        <label for="course">Program</label>
        <select ng-model="course" id="course" class="span4">
            @foreach ($courses as $course)
            <option value="<% $course %>"><% $course %></option>
            @endforeach
        </select>
    </div>
    <div class="span4">
        <label for="faculty">Faculty</label>
        <select ng-model="faculty" id="faculty" class="span4">
            @foreach ($faculty as $teacher)
            <option value="<% $teacher %>"><% $teacher %></option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="span4">
        <button type="button" ng-click="addDemo()" class="btn btn-success">Add Demo</button>
    </div>
</div>

<script type="text/javascript">
    initComponents();
</script>