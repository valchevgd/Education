using System;

namespace P10_MultiplicationTable2._0
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());
            int start = int.Parse(Console.ReadLine());

            while (true)
            {
                Console.WriteLine($"{num} X {start} = {num * start}");
                start++;
                if (start > 10)
                {
                    break;
                }
            }
        }
    }
}
