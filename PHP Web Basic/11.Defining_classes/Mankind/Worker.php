<?php

class Worker extends Human
{
    /**
     * @var float
     */
    private $week_salary;

    /**
     * @var int
     */
    private $hours_ped_day;

    /**
     * @var float
     */
    private $salary_per_hour;

    /**
     * Worker constructor.
     * @param float $week_salary
     * @param int $hours_ped_day
     * @throws Exception
     */
    public function __construct(string $first_name, string $last_name,float $week_salary, int $hours_ped_day)
    {
        if (strlen($last_name) < 3){
            throw new Exception('Expected length more than 3 symbols!Argument: lastName');
        }
        parent::__construct($first_name, $last_name);
        $this->setWeekSalary($week_salary);
        $this->setHoursPedDay($hours_ped_day);
        $this->salary_per_hour = $this::calculateSalary($week_salary, $hours_ped_day);
    }

    public function __toString()
    {
        return "First Name: ".$this->getFirstName().PHP_EOL
            ."Last Name: ".$this->getLastName().PHP_EOL
            .sprintf("Week Salary: %.2f",$this->getWeekSalary()).PHP_EOL
            .sprintf("Hours per day: %.2f",$this->getHoursPedDay()).PHP_EOL
            .sprintf("Salary per hour: %.2f",$this->getSalaryPerHour());
    }

    /**
     * @return float
     */
    public function getWeekSalary(): float
    {

        return $this->week_salary;
    }

    /**
     * @param float $week_salary
     * @throws Exception
     */
    public function setWeekSalary(float $week_salary): void
    {
        if ($week_salary < 10){
            throw new Exception('Expected value mismatch!Argument: weekSalary');
        }
        $this->week_salary = $week_salary;
    }

    /**
     * @return int
     */
    public function getHoursPedDay(): int
    {
        return $this->hours_ped_day;
    }

    /**
     * @param int $hours_ped_day
     * @throws Exception
     */
    public function setHoursPedDay(int $hours_ped_day): void
    {
        if ($hours_ped_day < 1 or $hours_ped_day > 12){
            throw new Exception('Expected value mismatch!Argument: workHoursPerDay');
        }
        $this->hours_ped_day = $hours_ped_day;
    }

    /**
     * @return float
     */
    public function getSalaryPerHour(): float
    {
        return $this->salary_per_hour;
    }

    /**
     * @param float $salary_per_hour
     */
    public function setSalaryPerHour(float $salary_per_hour): void
    {
        $this->salary_per_hour = $salary_per_hour;
    }

    private function calculateSalary(float $wsalary, int $hdays): float {
        return $wsalary / (7 * $hdays);
    }
}