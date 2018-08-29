using System;
using System.Text;

namespace P07_MultiplyBigNumber
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] firstNum = Console.ReadLine().ToCharArray();
            int secondNum = int.Parse(Console.ReadLine());
            StringBuilder sum = new StringBuilder();
            int dec = 0;
            int total = 0;

            for (int i = 0; i < firstNum.Length; i++)
            {
                int numOne = int.Parse(firstNum[firstNum.Length - 1 - i].ToString());
                total = numOne * secondNum + dec;
                dec = total / 10;
                sum.Insert(0, Convert.ToString(total % 10));
            }

           

            if (dec != 0)
            {
                sum.Insert(0, Convert.ToString(dec));
            }
            Console.WriteLine(sum);
        }
    }
}
