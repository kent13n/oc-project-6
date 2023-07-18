const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, MediaUpload, MediaUploadCheck } =
	wp.blockEditor;
const { ColorPicker, PanelBody, TextControl, Button } = wp.components;
const { __ } = wp.i18n;

registerBlockType("planty/testimonial", {
	title: __("Testimonial", "planty"),
	icon: "testimonial",
	category: "theme",
	edit({ className, attributes, setAttributes }) {
		const { nb, testimonials } = attributes;

		const nb_testimonials = typeof nb === "number" && nb > 0 ? nb : 1;
		const elements = [...Array(nb_testimonials)].map((_, i) => {
			return (
				<div className="testimonial" key={i}>
					<MediaUploadCheck>
						<MediaUpload
							type="image"
							onSelect={(image) => {
								if (!testimonials[i]) testimonials[i] = {};
								const item = { ...testimonials[i] };
								item.imageID = image.id;
								item.imageSrc = image.sizes.full.url;
								const items = [...testimonials];
								items[i] = item;
								setAttributes({ testimonials: items });
							}}
							render={({ open }) => {
								if (!testimonials[i]) testimonials[i] = {};
								const img = testimonials[i].imageSrc || "";

								return (
									<Button
										onClick={open}
										className={
											img
												? "image-button"
												: "image-button button"
										}
									>
										{img ? (
											<img src={img} />
										) : (
											"Choisir une image"
										)}
									</Button>
								);
							}}
						/>
					</MediaUploadCheck>
					<div className="testimonial-content">
						<RichText
							tagName="h2"
							placeholder="Nom"
							value={
								typeof testimonials[i] !== "undefined"
									? testimonials[i].title
									: ""
							}
							onChange={(title) => {
								if (!testimonials[i]) testimonials[i] = {};
								const item = { ...testimonials[i] };
								item.title = title;
								const items = [...testimonials];
								items[i] = item;
								setAttributes({ testimonials: items });
							}}
						/>
						<RichText
							tagName="p"
							placeholder="Commentaire"
							value={
								typeof testimonials[i] !== "undefined"
									? testimonials[i].content
									: ""
							}
							onChange={(content) => {
								if (!testimonials[i]) testimonials[i] = {};
								const item = { ...testimonials[i] };
								item.content = content;
								const items = [...testimonials];
								items[i] = item;
								setAttributes({ testimonials: items });
							}}
						/>
					</div>
				</div>
			);
		});

		return (
			<div className={className}>
				<InspectorControls>
					<PanelBody title="Témoignages" initialOpen={false}>
						<TextControl
							label="Nombre de témoignages:"
							value={attributes.nb}
							onChange={(val) => {
								if (val === "") setAttributes({ nb: val });

								let nb = parseInt(val);
								if (nb !== NaN && nb > 0) {
									setAttributes({ nb });
								}
							}}
						/>
					</PanelBody>
				</InspectorControls>

				{elements}
			</div>
		);
	},
	save() {
		return null;
	},
});
