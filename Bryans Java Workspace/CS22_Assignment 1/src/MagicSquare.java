/* 
 * MagicSquare.java
 * 
 * Author:          Computer Science E-22 staff
 * Modified by:     <your name>, <your e-mail address>
 * Date modified:   <current date>
 */

import java.util.*;

public class MagicSquare {
	//Starting row and column values
	private static final int FIRST_COLUMN = 0;
	private static final int FIRST_ROW = 0;

	// The minimum possible number to try to put on the magic square
	private static final int MIN_NUM = 1;

	// the current contents of the cells of the puzzle values[r][c]
	// gives the value in the cell at row r, column c
	private int[][] values;

	//This array keeps track of if a number is already used in a Magic Square
	//The index number of the array is equal to the number that is available (true) or is not available (false)
	private boolean[] isNumberAvailable;

	// the order (i.e., the dimension) of the puzzle
	private int order;

	//The maximum possible number to try putting on the magic square
	private int maxNum;

	//What each row and column should add up to
	private int sum;

	// Whether or not the puzzle is solved
	private boolean isSolved=false;

	/**
	 * Creates a MagicSquare object for a puzzle with the specified
	 * dimension/order.
	 */
	public MagicSquare(int order) {
		this.order = order;
		this.values = new int[order][order];
		this.maxNum=this.order*this.order;
		this.sum =((this.order)*(this.order)*(this.order)+(this.order))/2;
		this.isNumberAvailable=new boolean[maxNum+1];

		for(int i=0; i<this.order; i++)
		{
			for(int j=0; j<order; j++)
			{
				this.values[i][j]=0;
			}
		}

		for(int i=0; i<=this.maxNum; i++)
		{
			this.isNumberAvailable[i]=true;
		}

		// Add code to this constructor as needed to initialize
		// the fields that you add to the object.
	}

	/**
	 * This method should call the separate recursive-backtracking method
	 * that you will write, passing it the appropriate initial parameter(s).
	 * It should return true if a solution is found, and false otherwise.
	 */
	public boolean solve() {
		// Replace the line below with your implementation of this method.
		// REMEMBER: The recursive-backtracking code should NOT go here.
		// See the comments above.
		fillOneMagicSquare(FIRST_ROW, FIRST_COLUMN);
		System.out.println("Is my program ever going to print?!?!?!?!");
		return true;
		//      return isSolved;
	}

	public void fillOneMagicSquare(int row, int col){
		System.out.println();
		System.out.println("Making a new recursive call.");
		if(row == this.order){
			this.isSolved=true;
			System.out.println("Made it to the base case");
			display(); //I'm not supposed to print it out here, though.
			System.exit(0);
			return;
		}

		for(int i=MIN_NUM; i<=this.maxNum; i++)
		{
			if(this.isNumberAvailable[i])
			{
				//Place a number.  Test to see if the number has been placed yet.
				System.out.println("Row is " + row);
				System.out.println("Col is " + col);
				System.out.println("i is " + i);

				values[row][col]=i;    	
				isNumberAvailable[i]=false;

				//See if you're at the end of a row to see if the numbers add up 
				if(col==this.order-1) 
				{
					System.out.println("Going to test if the row numbers add up");
					if(numbersAddUpInRow(row))  //if numbers add up to sum, keep going.  Otherwise, the for loop should loop.  
					{
						if(col<this.order-1){
							System.out.println("Made it to the if and i=" + i);
							fillOneMagicSquare(row, col+1);
							System.out.println("At a col 3, returning from the 'if' recursive call");
						}    		
						fillOneMagicSquare(row+1, FIRST_COLUMN);
						System.out.println("at a col 3, returning from the 'else' recursive call");
					}
				}

				//See if you're at the end of a column to see if the numbers add up
				if(row==this.order-1)
				{
					System.out.println("Going to test if the column numbers add up");
					//if numbers add up to sum, fill the next magic square (by making a recurisve call).
					//If the numbers don't add up, the for loop should loop.
					if(numbersAddUpInColumn(col))
					{
						//I think the next few lines is where the issue is.
						if(col<this.order-1){
							System.out.println("Made it to the if and i=" + i);
							fillOneMagicSquare(row, col+1);
							System.out.println("At a col 3, returning from the 'if' recursive call");
						}    		
						fillOneMagicSquare(row+1, FIRST_COLUMN);
						System.out.println("at a col 3, returning from the 'else' recursive call");
					}
				}

				//If you're not at the end of a row, make a recursive call to fill the next square
				if(col<this.order-1){
					System.out.println("Made it to the if and i=" + i);
					fillOneMagicSquare(row, col+1);
					System.out.println("Not at a col 3, Returning from the 'if' recursive call");
				}    		

				//If they don't add up, "return" and continue the for loop to increase the last number... what i'm not sure about is how to return twice if things still aren't adding up after trying all the numbers in that digit... return again?
				//If they add up, (see below) 

				//Make the recursive call to place the next number
				isNumberAvailable[i]=true;
			}
		}

		//When the program reaches here, this is when you will backtrack.
		//You don't have to return here, the program will automatically return since it's "void".  
	}    	


	public boolean numbersAddUpInColumn(int col){
		int tempSumOfColumns = 0;
		for(int i = 0; i < this.order; i++){
			tempSumOfColumns+=values[i][col];
			System.out.println("the numbers summed up in column: " + i + " are: " + values[i][col]);
		}
		System.out.println("tempSumOfColumns is: " + tempSumOfColumns);
		if(tempSumOfColumns==sum)
			return true;
		return false;
	}

	public boolean numbersAddUpInRow(int row){
		int tempSumOfRows = 0;

		for(int i = 0; i < this.order; i++){
			tempSumOfRows+=values[row][i];
			System.out.println("the numbers summed up in row: " + i + " are: " + values[row][i]);
		}
		System.out.println("tempSumOfRows is: " + tempSumOfRows);
		if(tempSumOfRows==sum)
			return true;
		return false;
	}

	/**
	 * Displays the current state of the puzzle.
	 * You should not change this method.
	 */
	public void display() {
		for (int r = 0; r < order; r++) {
			printRowSeparator();
			for (int c = 0; c < order; c++) {
				System.out.print("|");
				if (values[r][c] == 0)
					System.out.print("   ");
				else {
					if (values[r][c] < 10) {
						System.out.print(" ");
					}
					System.out.print(" " + values[r][c] + " ");
				}
			}
			System.out.println("|");
		}
		printRowSeparator();
	}

	// A private helper method used by display()
	// to print a line separating two rows of the puzzle.
	private void printRowSeparator() {
		for (int i = 0; i < order; i++)
			System.out.print("-----");
		System.out.println("-");
	}

	public static void main(String[] args) {
		/*******************************************************
		 **** You should NOT change any code in this method ****
		 ******************************************************/

		Scanner console = new Scanner(System.in);
		System.out.print("What order Magic Square would you like to solve? ");
		int order = console.nextInt();

		MagicSquare puzzle = new MagicSquare(order);
		if (puzzle.solve()) {
			System.out.println("Here's the solution:");
			puzzle.display();
		} else {
			System.out.println("No solution found.");
		}
	}
}