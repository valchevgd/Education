using System;

namespace P06_BooleanVariable
{
    class Program
    {
        static void Main(string[] args)
        {
            string text = Console.ReadLine();

            bool isValid = Convert.ToBoolean(text);

            if (isValid == true)
            {
                Console.WriteLine("Yes");
            }
            else
            {
                Console.WriteLine("No");
            }
        }
    }
}
