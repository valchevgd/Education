using System;

namespace P01_BlankReceipt
{
    class Program
    {
        static void Main(string[] args)
        {
            PrintRecepit();
        }

        private static void PrintRecepit()
        {
            PrintHeader();
            PrintBody();
            PrintFooter();
        }

        private static void PrintHeader()
        {
            Console.WriteLine("CASH RECEPIT");
            Console.WriteLine("------------");
        }

        private static void PrintBody()
        {
            Console.WriteLine("Charged to__");
            Console.WriteLine("Receivet by_");
        }

        private static void PrintFooter()
        {
            Console.WriteLine("------------");
            Console.WriteLine('\u00A9' + " SoftUni");
        }
    }
}
