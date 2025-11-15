# Candle Carousel Science Project Website - Steering Document

## Project Overview

**Goal:** Build a website showcasing the Candle Carousel Science Project that demonstrates how thermal energy from candles converts into mechanical motion through convection.

**Tech Stack:**

- Simple PHP (static PHP files, no server required)
- HTML/CSS for structure and styling
- No database or server-side processing needed

**Target Audience:** Science fair judges, educators, students, and general public interested in physics demonstrations

---

## Website Structure: 10 Pages

### Page 1: Home/Title Page (`index.php`)

**Content:**

- Project title: "How Candle Carousels Convert Heat Energy into Motion"
- Visual header with project name
- Brief tagline or subtitle
- Navigation menu to other pages
- Optional: Hero image of candle carousel

**Key Elements:**

- Clean, professional design
- Clear navigation structure
- Introduction to the project

---

### Page 2: Purpose (`purpose.php`)

**Content:**

- Full purpose statement from reference document
- Explanation of why the experiment was conducted
- Importance and applicability of the experiment
- Connection to real-world applications (wind turbines, hot air balloons, heating systems)

**Reference Material:**

- Use Purpose section from "How Candle Carousels Convert Heat Energy into Motion.md"

---

### Page 3: Background Research (`background.php`)

**Content:**

- Historical context: German Christmas pyramids from Erzgebirge region
- Origin story: Miners using candle pyramids in mines (18th century)
- Evolution from practical tool to decorative item
- Scientific explanation of convection
- How convection creates motion in candle carousels
- Comparison to wind turbines

**Reference Material:**

- Background Research section
- Historical Context section
- The Science of Convection section

---

### Page 4: Research Question & Hypothesis (`question_hypothesis.php`)

**Content:**

- Research Question: "How does the number of candles affect the rotational speed of a candle carousel?"
- Hypothesis statement in if-then-because format
- Clear explanation of predicted relationship

**Reference Material:**

- Question section
- Hypothesis section

---

### Page 5: Variables & Materials (`variables_materials.php`)

**Content:**

- **Variables Section:**
  - Independent Variable: Number of candles (1, 2, 3, or 4)
  - Dependent Variable: Rotational speed (RPM)
  - Constant Variables: List all controlled variables
- **Materials Section:**
  - Complete list of materials needed
  - Organized by category (candles, construction materials, measurement tools)

**Reference Material:**

- Variables section
- Materials section

---

### Page 6: Procedures (`procedures.php`)

**Content:**

- Step-by-step instructions for building the carousel
- Detailed experimental procedure
- Safety precautions prominently displayed
- Numbered steps with clear formatting
- Visual organization for easy following

**Reference Material:**

- Procedures section (all 8 main steps)

---

### Page 7: Data & Results (`data_results.php`)

**Content:**

- **Data Section:**
  - Data table showing trials and averages
  - Additional observations
  - Clear metric units (RPM)
- **Results Section:**
  - Statistical analysis summary
  - Key findings
  - Relationship description (linear, exponential, etc.)
  - Percentage calculations

**Reference Material:**

- Data section
- Result section

---

### Page 8: Graph (`graph.php`)

**Content:**

- Visual representation of data
- Line graph or bar chart showing:
  - X-axis: Number of Candles (1, 2, 3, 4)
  - Y-axis: Average Rotations per Minute (RPM)
  - Title: "Effect of Number of Candles on Carousel Rotation Speed"
- Can be implemented as:
  - Static image (if data/images available)
  - HTML5 Canvas/SVG chart
  - CSS-based visualization
  - Placeholder with description if actual data not available

**Reference Material:**

- Graph section

---

### Page 9: Conclusion (`conclusion.php`)

**Content:**

- Answer to research question
- Supporting evidence with references to data/graph
- Statistical analysis summary
- Scientific explanation of results
- Real-world applications:
  - Wind turbines
  - Hot air balloons
  - Convection ovens
  - Weather systems
- Hypothesis evaluation
- Key learnings

**Reference Material:**

- Conclusion section (all 5 required components)

---

### Page 10: Future Research & Bibliography (`future_bibliography.php`)

**Content:**

- **What I Would Do Next Section:**
  - 8 future research directions listed
  - Ideas for extending the experiment
- **Bibliography Section:**
  - All references in APA format
  - Links to sources (if applicable)
  - Proper citation formatting

**Reference Material:**

- What I Would Do Next section
- Bibliography section

---

## Technical Implementation Guidelines

### File Structure

```
/
├── index.php (Home/Title)
├── purpose.php
├── background.php
├── question_hypothesis.php
├── variables_materials.php
├── procedures.php
├── data_results.php
├── graph.php
├── conclusion.php
├── future_bibliography.php
├── css/
│   └── style.css (shared stylesheet)
└── images/
    └── (project images if available)
```

### PHP Implementation Approach

- Use PHP includes for shared header/footer/navigation
- Simple PHP variables for dynamic content
- No database queries or complex server logic
- Static content with PHP for templating

### Design Considerations

- Clean, professional science fair presentation style
- Consistent navigation across all pages
- Readable typography
- Appropriate use of whitespace
- Color scheme: Consider warm colors (candle theme) but keep professional
- Responsive design (works on desktop and tablet)

### Navigation Structure

- Header navigation menu on all pages
- Previous/Next page buttons
- Breadcrumb navigation optional
- Clear page indicators

### Content Guidelines

- Use exact content from reference document where specified
- Maintain scientific accuracy
- Use proper scientific terminology
- Include metric units throughout
- Professional tone appropriate for science fair

---

## Key References from Source Document

### Primary Content Sources:

1. **Purpose Statement** - Lines 5-8
2. **Background Research** - Lines 11-18, 264-300
3. **Research Question** - Line 23
4. **Hypothesis** - Lines 27-29
5. **Variables** - Lines 33-47
6. **Materials** - Lines 50-64
7. **Procedures** - Lines 68-126
8. **Data Template** - Lines 139-156
9. **Graph Description** - Lines 159-168
10. **Results Template** - Lines 172-178
11. **Conclusion** - Lines 182-219
12. **Future Research** - Lines 222-241
13. **Bibliography** - Lines 244-259

### Historical & Scientific Context:

- German Christmas pyramids history (Lines 264-271)
- Convection science explanation (Lines 272-300)
- Real-world applications (Lines 200-205)

---

## Content Adaptation Notes

### For Static PHP Implementation:

- Convert markdown formatting to HTML
- Use PHP variables for repeated content (project title, etc.)
- Include navigation component in header/footer
- Structure content in semantic HTML5 elements
- Use CSS for styling and layout

### Missing Data Handling:

- If actual experimental data is not available, use template structure
- Include placeholders with clear labels
- Maintain professional appearance even without complete data

### Image Placeholders:

- If images are not available, use descriptive alt text
- Create placeholder sections with clear labels
- Maintain layout structure for when images are added

---

## Development Checklist

- [ ] Create base HTML structure for all 10 pages
- [ ] Implement shared header/navigation component
- [ ] Implement shared footer component
- [ ] Create CSS stylesheet with consistent styling
- [ ] Populate each page with content from reference document
- [ ] Format data tables properly
- [ ] Create graph visualization (or placeholder)
- [ ] Ensure all references are properly formatted (APA)
- [ ] Test navigation between pages
- [ ] Verify all content is accurate and complete
- [ ] Check responsive design on different screen sizes
- [ ] Validate HTML/CSS
- [ ] Test PHP includes work correctly

---

## Notes

- "No Servers" requirement means files should work when opened directly in a browser or with simple local PHP (php -S localhost:8000)
- Keep PHP usage minimal - mainly for includes and basic templating
- All content should be self-contained in the PHP files
- No external dependencies beyond standard PHP installation
