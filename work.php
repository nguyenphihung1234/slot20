<?php

class Employee {
    public $name;
    public $vacation_days_taken;
    public $work_days;
    public $export_ratio;

    public function __construct($name, $vacation_days_taken, $work_days, $export_ratio) {
        $this->name = $name;
        $this->vacation_days_taken = $vacation_days_taken;
        $this->work_days = $work_days;
        $this->export_ratio = $export_ratio;
    }

    public function calculatePerformance() {
        $performance_score = 0;

        // Check vacation days taken
        if ($this->vacation_days_taken <= 12) {
            $performance_score += 12 - $this->vacation_days_taken;
        } else {
            $performance_score -= 1;
        }
        if ($this->work_days > 0 && $this->work_days <= 22) {

            $performance_score += $this->work_days;
        }
        $performance_score += $this->export_ratio * 200; // Assuming export_ratio is in proportion to 200

        return $performance_score;
    }
}
$employee1 = new Employee("John", 5, 20, 0.8);
$employee2 = new Employee("Jane", 15, 22, 0.9);

echo $employee1->name . "'s performance score: " . $employee1->calculatePerformance() . "\n";
echo $employee2->name . "'s performance score: " . $employee2->calculatePerformance() . "\n";

?>ss