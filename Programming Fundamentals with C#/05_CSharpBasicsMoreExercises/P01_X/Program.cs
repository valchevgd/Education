using System;

namespace P01_X
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());

            int middleSpaceCounter = num - 2;
            int sideSpaceCounter = 0;
            int half = (num - 1) / 2;


            for (int i = 1; i <= half; i++)
            {
                string text = "";

                for (int j = 0; j < sideSpaceCounter; j++)
                {
                    text += " ";
                }
                text += "x";
                for (int k = 0; k < middleSpaceCounter; k++)
                {
                    text += " ";
                }
                text += "x";
                for (int j = 0; j < sideSpaceCounter; j++)
                {
                    text += " ";
                }

                sideSpaceCounter++;
                middleSpaceCounter -= 2;

                Console.WriteLine(text);
            }

            string middle = "";
            for (int j = 0; j < half; j++)
            {
                middle += " ";
            }

            middle += "x";

            Console.WriteLine(middle);

            middleSpaceCounter += 2;
            sideSpaceCounter--;

            for (int k = 1; k <= half; k++)
            {
                string text = "";

                for (int j = 0; j < sideSpaceCounter; j++)
                {
                    text += " ";
                }
                text += "x";
                for (int l = 0; l < middleSpaceCounter; l++)
                {
                    text += " ";
                }
                text += "x";
                for (int j = 0; j < sideSpaceCounter; j++)
                {
                    text += " ";
                }

                sideSpaceCounter--;
                middleSpaceCounter += 2;


                Console.WriteLine(text);
            }
        }
    }
}
