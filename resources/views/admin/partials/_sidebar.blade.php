<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item"><a class="nav-item-hold" href="{{ route('admin.dashboard') }}"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="master"><a class="nav-item-hold"><i class="nav-icon i-Receipt"></i><span class="nav-text">Master Data</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="transaction"><a class="nav-item-hold"><i class="fa fa-exchange fa-3x" aria-hidden="true" ></i><span class="nav-text">Transaction</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="report"><a class="nav-item-hold"><i class="fa fa-table fa-3x" aria-hidden="true"></i><span class="nav-text">Report</span></a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none master" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="childNav" data-parent="master">
            <li class="nav-item"><a href="{{ route('admin.master.user.index') }}"><i class="nav-icon i-Data-Center"></i><span class="item-name">Manpower Master</span></a></li>
        </ul>
        <ul class="childNav" data-parent="master">
            <li class="nav-item"><a href="{{ route('admin.master.site.index') }}"><i class="nav-icon i-Data-Center"></i><span class="item-name">Site Master</span></a></li>
        </ul>
        <ul class="childNav" data-parent="master">
            <li class="nav-item"><a href="{{ route('admin.master.vehicle.index') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Machinery Master</span></a></li>
        </ul>
        <ul class="childNav" data-parent="master">
            <li class="nav-item"><a href="{{ route('admin.master.jobActivity.index') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Job Activity Master</span></a></li>
        </ul>
        <ul class="childNav" data-parent="master">
            <li class="nav-item"><a href="{{ route('admin.master.supplier.index') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Supplier Master</span></a></li>
        </ul>

        <ul class="childNav" data-parent="transaction">
            <li class="nav-item">
                <a class="collapsed" href="#sidebar-ui1" data-toggle="collapse" aria-expanded="false">
                    <span class="icon">
                        <i class="fi flaticon-layers"></i>
                    </span>
                    Daily Transaction
                    <i class="ml-4 toggle fa fa-angle-down"></i>
                </a>
            </li>
            <ul id="sidebar-ui1" class="collapse" style="padding-left:8px;">
                <li class="nav-item"><a href="{{ route('admin.operatorWorkTransaction') }}"> <i class="nav-icon i-People-on-Cloud"></i> <span class="item-name">Operator Daily Transaction</span> </a> </li>
                <li class="nav-item"><a href="{{ route('admin.mechanicWorkTransaction') }}"> <i class="nav-icon i-Data-Center"></i> <span class="item-name">Mechanic Daily Transaction</span> </a> </li>
            </ul>
        </ul>
        <ul class="childNav" data-parent="transaction">
            <li class="nav-item"><a href="{{ route('admin.miscCosting') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Site Expense Transaction</span></a></li>
        </ul>
        <ul class="childNav" data-parent="transaction">
            <li class="nav-item"><a href="{{ route('admin.sparePartCosting') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Machinery Expense Transaction</span></a></li>
        </ul>
        <ul class="childNav" data-parent="transaction">
            <li class="nav-item"><a href="{{ route('admin.workerExpenseTransaction') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Worker Expense Transaction</span></a></li>
        </ul>
        <ul class="childNav" data-parent="transaction">
            <li class="nav-item"><a href="{{ route('admin.workDoneClaim') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Work Done For Claim</span></a></li>
        </ul>

        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.sparePartCosting') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Monthly Spare Parts & Transportation Costing</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.miscCosting') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Misc - Costing (Material)</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.compareOperatorMechanic') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Compare Operator Mechanic Transaction</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.workDone') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Work Done</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.machineryList') }}"><i class="nav-icon i-People-on-Cloud"></i><span class="item-name">Machinery List</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.summaryDiesel') }}"><i class="nav-icon i-Data-Center"></i><span class="item-name">Summary Diesel</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.dailyDiesel') }}"><i class="nav-icon i-Car"></i><span class="item-name">Daily Diesel</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.summaryWorkReport') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Summary Work Report</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.workerPayslip') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Worker Payslip</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.monthlySummarySalary') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Monthly Summary Salary</span></a></li>
        </ul>
        <ul class="childNav" data-parent="report">
            <li class="nav-item"><a href="{{ route('admin.monthlyProjectCost') }}"><i class="nav-icon i-Administrator"></i><span class="item-name">Monthly Summary Project Cost</span></a></li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>
