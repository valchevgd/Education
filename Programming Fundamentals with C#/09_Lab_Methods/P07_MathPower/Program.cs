using System;

namespace _07_MathPower
{
    class Program
    {
        static void Main(string[] args)
        {
            double number = double.Parse(Console.ReadLine());
            double power = double.Parse(Console.ReadLine());

            double powered = RiseToPower(number, power);

            Console.WriteLine(powered);
        }

        private static double RiseToPower(double number, double power)
        {
            double temp = number;

            for (int i = 2; i <= power; i++)
            {
                temp = temp * number;
            }

            return temp;
        }
    }
}
