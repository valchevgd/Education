using System;
using System.Text;

namespace P06_SumBigNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] firstNum = Console.ReadLine().ToCharArray();
            char[] secondNum = Console.ReadLine().ToCharArray();
            StringBuilder sum = new StringBuilder();
            int stopIndex = Math.Min(firstNum.Length, secondNum.Length);
            int dec = 0;
            int total = 0;

            for (int i = 0; i < stopIndex; i++)
            {
                int numOne = int.Parse(firstNum[firstNum.Length - 1 - i].ToString());
                int numTwo = int.Parse(secondNum[secondNum.Length - 1 - i].ToString());
                total = numOne + numTwo + dec;
                dec = total / 10;
                sum.Insert(0, Convert.ToString(total % 10));
            }

            if (firstNum.Length > secondNum.Length)
            {
                for (int i = stopIndex; i < firstNum.Length; i++)
                {
                    int nextNum = int.Parse(firstNum[firstNum.Length - 1 - i].ToString());
                    total = nextNum + dec;
                    dec = total / 10;
                    sum.Insert(0, Convert.ToString(total % 10));
                }
            }
            else if (secondNum.Length > firstNum.Length)
            {
                for (int i = stopIndex; i < secondNum.Length; i++)
                {
                    int nexNum = int.Parse(secondNum[secondNum.Length - 1 - i].ToString());
                    total = nexNum + dec;
                    dec = total / 10;
                    sum.Insert(0, Convert.ToString(total % 10));
                }
            }

            if (dec != 0)
            {
            sum.Insert(0, Convert.ToString(dec));
            }
            Console.WriteLine(sum);
        }
    }
}
